<?php

/*
 * This file is part of the Ocrend Framewok 3 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ocrend\Kernel\Helpers;

/**
 * Funciones reutilizables dentro del sistema.
 *
 * @author Brayan Narváez <prinick@ocrend.com>
 */

final class Functions extends \Twig_Extension {

  /**
   * Verifica parte de una fecha, método privado usado en str_to_time
   * 
   * @param int $index: Índice del arreglo
   * @param array $detail: Arreglo
   * @param int $max: Valor a comparar
   *
   * @return bool con el resultado de la comparación
  */
  private static function check_str_to_time(int $index, array $detail, int $max) : bool {
    return !array_key_exists($index,$detail) || !is_numeric($detail[$index]) || intval($detail[$index]) < $max;
  }

  /**
   * Verifica la fecha completa
   *
   * @param array $detail: Arreglo
   * 
   * @return bool
  */
  private static function check_time(array $detail) : bool {
    return self::check_str_to_time(0,$detail,1) || self::check_str_to_time(1,$detail,1) || intval($detail[1]) > 12 || self::check_str_to_time(2,$detail,1970);
  }

  /**
  * Redirecciona a una URL
  *
  * @param string $url: Sitio a donde redireccionará, si no se pasa, por defecto
  * se redirecciona a la URL principal del sitio
  *
  * @return void
  */
  public static function redir($url = null)  {
    global $config;
    
    if (null == $url) {
      $url = $config['build']['url'];
    }
    
    \Symfony\Component\HttpFoundation\RedirectResponse::create($url)->send();
  }

  /**
   * Calcula el porcentaje de una cantidad
   *
   * @param float $por: El porcentaje a evaluar, por ejemplo 1, 20, 30 % sin el "%", sólamente el número
   * @param float $n: El número al cual se le quiere sacar el porcentaje
   *
   * @return float con el porcentaje correspondiente
   */
  public static function percent(float $por, float $n) : float {
    return $n*($por/100);
  }

  /**
   * Da unidades de peso a un integer según sea su tamaño asumida en bytes
   *
   * @param int $size: Un entero que representa el tamaño a convertir
   *
   * @return string del tamaño $size convertido a la unidad más adecuada
   */
  public static function convert(int $size) : string {
    $unit = array('bytes', 'kb', 'mb', 'gb', 'tb', 'pb');
    return round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
  }

  /**
   * Retorna la URL de un gravatar, según el email
   *
   * @param string  $email: El email del usuario a extraer el gravatar
   * @param int $size: El tamaño del gravatar
   * @return string con la URl
  */
  public static function get_gravatar(string $email, int $size = 35) : string  {
    return 'http://www.gravatar.com/avatar/' . md5($email) . '?s=' . (int) abs($size) . '?d=robohash';
  }


  /**
   * Alias de Empty, más completo
   *
   * @param mixed $var: Variable a analizar
   *
   * @return bool con true si está vacío, false si no, un espacio en blanco cuenta como vacío
   */
  public static function emp($var) : bool {
    return (null === $var || empty(trim(str_replace(' ','',$var))));
  }

   //------------------------------------------------

   /**
     * Aanaliza que TODOS los elementos de un arreglo estén llenos, útil para analizar por ejemplo que todos los elementos de un formulario esté llenos
     * pasando como parámetro $_POST
     *
     * @param array $array, arreglo a analizar
     *
     * @return bool con true si están todos llenos, false si al menos uno está vacío
   */
   public static function all_full(array $array) : bool {
     foreach($array as $e) {
       if(self::emp($e) and $e != '0') {
         return false;
       }
     }
     return true;
   }

  /**
   * Alias de Empty() pero soporta más de un parámetro (infinitos)
   *
   * @return bool con true si al menos uno está vacío, false si todos están llenos
  */
  public static function e() : bool  {
    for ($i = 0, $nargs = func_num_args(); $i < $nargs; $i++) {
      if(self::emp(func_get_arg($i)) && func_get_arg($i) != '0') {
        return true;
      }
    }
    
    return false;
  }


  /**
   * Alias de date() pero devuele días y meses en español
   *
   * @param string $format: Formato de salida (igual que en date())
   * @param int $time: Tiempo, por defecto es time() (igual que en date())
   *
   * @return string con la fecha en formato humano (y en español)
  */
  /*public static function fecha(string $format, int $time = 0) : string  {
    $date = date($format,$time == 0 ? time() : $time);*/
  public static function fecha(string $date, $completa = true) : string  {
    $date = date_create($date);
    
    if(!$completa){
      $date = date_format($date, 'l d \d\e F \d\e Y');
    }else{
      $date = date_format($date, 'l d \d\e F \d\e Y \a \l\a\s g:i:s a');
    }

    $cambios = array(
         'Monday'=> 'Lunes',
         'Tuesday'=> 'Martes',
         'Wednesday'=> 'Miércoles',
         'Thursday'=> 'Jueves',
         'Friday'=> 'Viernes',
         'Saturday'=> 'Sábado',
         'Sunday'=> 'Domingo',
         'January'=> 'Enero',
         'February'=> 'Febrero',
         'March'=> 'Marzo',
         'April'=> 'Abril',
         'May'=> 'Mayo',
         'June'=> 'Junio',
         'July'=> 'Julio',
         'August'=> 'Agosto',
         'September'=> 'Septiembre',
         'October'=> 'Octubre',
         'November'=> 'Noviembre',
         'December'=> 'Diciembre',
         'Mon'=> 'Lun',
         'Tue'=> 'Mar',
         'Wed'=> 'Mie',
         'Thu'=> 'Jue',
         'Fri'=> 'Vie',
         'Sat'=> 'Sab',
         'Sun'=> 'Dom',
         'Jan'=> 'Ene',
         'Aug'=> 'Ago',
         'Apr'=> 'Abr',
         'Dec'=> 'Dic'
    );
    return str_replace(array_keys($cambios), array_values($cambios), $date);
  }

  /**
   *  Devuelve la etiqueta <base> html adecuada para que los assets carguen desde allí.
   *  Se adapta a la configuración del dominio en general.
   *
   * @return string <base href="ruta" />
  */
  public static function base_assets() : string {
    global $config, $http;

    # Revisar protocolo
    $https = 'http://';
    if($config['router']['ssl']) {
      # Revisar el protocolo
      if(true == $http->server->get('HTTPS')
        || $http->server->get('HTTPS') == 'on' 
        || $http->server->get('HTTPS') == 1) {
        $https = 'https://';
      }
    }

    # Revisar el path
    $path = $config['router']['path'];
    if('/' != substr($path, -1)) {
      $path .= '/';
    }

    # Revisar subdominio
    $www = substr($http->server->get('SERVER_NAME'), 0, 2);
    $base = $path;
    if (strtolower($www) == 'www') {
      $base = 'www.' . $path;
    }
  
    return '<base href="' . $https . $base . '" />';
  }
  
  /**
   * Obtiene el último día de un mes específico
   *
   * @param int $mes: Mes (1 a 12)
   * @param int $anio: Año (1975 a 2xxx)
   *
   * @return string con el número del día
  */
  public static function last_day_month(int $mes, int $anio) : string {
    return date('d', (mktime(0,0,0,$mes + 1, 1, $anio) - 1));
  }
  
  /**
   * Pone un cero a la izquierda si la cifra es menor a diez
   *
   * @param int $num: cifra
   *
   * @return string cifra con cero a la izquirda
   */
  public static function cero_izq(int $num) : string {
    return (string) ($num < 10 ? '0' . $num : $num);
  }

  /**
   * Devuelve el timestamp de una fecha, y null si su formato es incorrecto.
   * 
   * @param string|null $fecha: Fecha con formato dd/mm/yy
   * @param string $hora: Hora de inicio de la $fecha
   *
   * @return int|null con el timestamp
   */
  public static function str_to_time($fecha, string $hora = '00:00:00') {
    $detail = explode('/',$fecha ?? '');

    // Formato de día incorrecto, mes y año incorrectos
    if(self::check_time($detail)) {
      return null;
    }

    // Verificar días según año y mes
    $day = intval($detail[0]);
    $month = intval($detail[1]);
    $year = intval($detail[2]);

    // Veriricar dia según mes
    if ($day > self::last_day_month($month, $year)) {
      return null;
    }

    return strtotime($detail[0] . '-' . $detail[1] . '-' . $detail[2] . ' ' . $hora);
  }

  /**
   * Devuelve la fecha en format dd/mm/yyy desde el principio de la semana, mes o año actual.
   *
   * @param int $desde: Desde donde
   *
   * @return mixed
   */
  public static function desde_date(int $desde) {
    # Obtener esta fecha
    $hoy = date('d/m/Y/D', time());
    $hoy = explode('/', $hoy);

    # Arreglo de condiciones y subcondiciones
    $fecha = array(
       1 => date('d/m/Y', time()),
       2 => date('d/m/Y', time() - (60*60*24)),
       3 => array(
         'Mon' => $hoy[0],
         'Tue' => intval($hoy[0]) - 1,
         'Wed' => intval($hoy[0]) - 2,
         'Thu' => intval($hoy[0]) - 3,
         'Fri' => intval($hoy[0]) - 4,
         'Sat' => intval($hoy[0]) - 5,
         'Sun' => intval($hoy[0]) - 6
       ),
       4 => '01/'. self::cero_izq($hoy[1]) .'/' . $hoy[2],
       5 => '01/01/' . $hoy[2]
    );

    if($desde == 3) {
      # Dia actual
      $dia = $fecha[3][$hoy[3]];

      # Mes anterior y posiblemente, año también.
      if($dia == 0) {
        # Restante de la fecha
        $real_fecha = self::last_day_month($hoy[1],$hoy[2]) .'/'. self::cero_izq($hoy[1] - 1) .'/';

        # Verificamos si estamos en enero
        if($hoy[1] == 1) {
          return  $real_fecha . ($hoy[2] - 1);
        }
        
        # Si no es enero, es el año actual
        return $real_fecha . $hoy[2];
      }
      
      return self::cero_izq($dia) .'/'. self::cero_izq($hoy[1]) .'/' . $hoy[2];
    } else if(array_key_exists($desde,$fecha)) {
      return $fecha[$desde];
    }

    throw new \RuntimeException('Problema con el valor $desde en desde_date()');
  }

  /**
   * Obtiene el tiempo actual
   *
   * @return int devuelve time()
   */
  public static function timestamp() : int {
    return time();
  }

  function twig_json_decode($json)
  {
    return json_decode($json, true);
  }

  /*! 
  @function num2letras () 
  @abstract Dado un n?mero lo devuelve escrito. 
  @param $num number - N?mero a convertir. 
  @param $fem bool - Forma femenina (true) o no (false). 
  @param $dec bool - Con decimales (true) o no (false). 
  @result string - Devuelve el n?mero escrito en letra. 
 
*/ 

/**
* Devuelve un número en letra en format X PESOS xx/100 M.N.
*
* @param int $desde: Desde donde
*
* @return mixed
*/
function numero_letras($num) { 
    $fem = false;
    $dec = true;
         
    $matuni[2]  = "dos"; 
    $matuni[3]  = "tres"; 
    $matuni[4]  = "cuatro"; 
    $matuni[5]  = "cinco"; 
    $matuni[6]  = "seis"; 
    $matuni[7]  = "siete"; 
    $matuni[8]  = "ocho"; 
    $matuni[9]  = "nueve"; 
    $matuni[10] = "diez"; 
    $matuni[11] = "once"; 
    $matuni[12] = "doce"; 
    $matuni[13] = "trece"; 
    $matuni[14] = "catorce"; 
    $matuni[15] = "quince"; 
    $matuni[16] = "dieciseis"; 
    $matuni[17] = "diecisiete"; 
    $matuni[18] = "dieciocho"; 
    $matuni[19] = "diecinueve"; 
    $matuni[20] = "veinte"; 
    $matunisub[2] = "dos"; 
    $matunisub[3] = "tres"; 
    $matunisub[4] = "cuatro"; 
    $matunisub[5] = "quin"; 
    $matunisub[6] = "seis"; 
    $matunisub[7] = "sete"; 
    $matunisub[8] = "ocho"; 
    $matunisub[9] = "nove"; 
 
    $matdec[2] = "veint"; 
    $matdec[3] = "treinta"; 
    $matdec[4] = "cuarenta"; 
    $matdec[5] = "cincuenta"; 
    $matdec[6] = "sesenta"; 
    $matdec[7] = "setenta"; 
    $matdec[8] = "ochenta"; 
    $matdec[9] = "noventa"; 
    $matsub[3]  = 'mill'; 
    $matsub[5]  = 'bill'; 
    $matsub[7]  = 'mill'; 
    $matsub[9]  = 'trill'; 
    $matsub[11] = 'mill'; 
    $matsub[13] = 'bill'; 
    $matsub[15] = 'mill'; 
    $matmil[4]  = 'millones'; 
    $matmil[6]  = 'billones'; 
    $matmil[7]  = 'de billones'; 
    $matmil[8]  = 'millones de billones'; 
    $matmil[10] = 'trillones'; 
    $matmil[11] = 'de trillones'; 
    $matmil[12] = 'millones de trillones'; 
    $matmil[13] = 'de trillones'; 
    $matmil[14] = 'billones de trillones'; 
    $matmil[15] = 'de billones de trillones'; 
    $matmil[16] = 'millones de billones de trillones'; 
         
    $float=explode('.',$num);
    $num=$float[0];
 
    $num = trim((string)@$num); 
    if ($num[0] == '-') { 
        $neg = 'menos '; 
        $num = substr($num, 1); 
    }else
        $neg = ''; 
        while ($num[0] == '0') $num = substr($num, 1); 
    if ($num[0] < '1' or $num[0] > 9) $num = '0' . $num; 
        $zeros = true; 
        $punt = false; 
        $ent = ''; 
        $fra = ''; 
        for ($c = 0; $c < strlen($num); $c++) { 
        $n = $num[$c]; 
    if (! (strpos(".,'''", $n) === false)) { 
        if ($punt) break; 
        else{ 
            $punt = true; 
            continue; 
        } 
    }elseif (! (strpos('0123456789', $n) === false)) { 
        if ($punt) { 
            if ($n != '0') $zeros = false; 
            $fra .= $n; 
        }else
            $ent .= $n; 
    }else
        break; 
    } 
    $ent = '     ' . $ent; 
    if ($dec and $fra and ! $zeros) { 
        $fin = ' coma'; 
        for ($n = 0; $n < strlen($fra); $n++) { 
            if (($s = $fra[$n]) == '0') 
                $fin .= ' cero'; 
            elseif ($s == '1') 
                $fin .= $fem ? ' una' : ' un'; 
            else
                $fin .= ' ' . $matuni[$s]; 
        } 
    }else
        $fin = ''; 
    if ((int)$ent === 0) return 'Cero ' . $fin; 
        $tex = ''; 
        $sub = 0; 
        $mils = 0; 
        $neutro = false; 
        while ( ($num = substr($ent, -3)) != '   ') { 
            $ent = substr($ent, 0, -3); 
            if (++$sub < 3 and $fem) { 
                $matuni[1] = 'una'; 
                $subcent = 'as'; 
            }else{ 
                $matuni[1] = $neutro ? 'un' : 'uno'; 
                $subcent = 'os'; 
            } 
        $t = ''; 
        $n2 = substr($num, 1); 
        if ($n2 == '00') { 
        }elseif ($n2 < 21) 
            $t = ' ' . $matuni[(int)$n2]; 
        elseif ($n2 < 30) { 
            $n3 = $num[2]; 
            if ($n3 != 0) $t = 'i' . $matuni[$n3]; 
                $n2 = $num[1]; 
                $t = ' ' . $matdec[$n2] . $t; 
        }else{ 
            $n3 = $num[2]; 
            if ($n3 != 0) $t = ' y ' . $matuni[$n3]; 
                $n2 = $num[1]; 
                $t = ' ' . $matdec[$n2] . $t; 
        } 
        $n = $num[0]; 
        if ($n == 1) { 
            if($num > 101 && $num < 200){
                $t = ' ciento' . $t;
            }else{
                $t = ' cien' . $t; 
            }
        }elseif ($n == 5){ 
            $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t; 
        }elseif ($n != 0){ 
            $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t; 
        } 
        if ($sub == 1) { 
        }elseif (! isset($matsub[$sub])) { 
            if ($num == 1) { 
                $t = ' mil'; 
            }elseif ($num > 1){ 
                $t .= ' mil'; 
            } 
        }elseif ($num == 1) { 
            $t .= ' ' . $matsub[$sub] . '?n'; 
        }elseif ($num > 1){ 
            $t .= ' ' . $matsub[$sub] . 'ones'; 
        }   
        if ($num == '000') $mils ++; 
        elseif ($mils != 0) { 
            if (isset($matmil[$sub])) $t .= ' ' . $matmil[$sub]; 
            $mils = 0; 
        } 
        $neutro = true; 
        $tex = $t . $tex; 
    } 
    $tex = $neg . substr($tex, 1) . $fin; 
    //Zi hack --> return ucfirst($tex);
    $end_num=ucfirst($tex).' pesos '.$float[1].'/100 M/N';
    return $end_num; 
}

  /**
   * Se obtiene de Twig_Extension y sirve para que cada función esté disponible como etiqueta en twig
   *
   * @return array con todas las funciones con sus respectivos nombres de acceso en plantillas twig
   */
  public function getFunctions() : array {
    return array(
       new \Twig_Function('redir', array($this, 'redir')),
       new \Twig_Function('percent', array($this, 'percent')),
       new \Twig_Function('convert', array($this, 'convert')),
       new \Twig_Function('get_gravatar', array($this, 'get_gravatar')),
       new \Twig_Function('emp', array($this, 'emp')),
       new \Twig_Function('e_dynamic', array($this, 'e')),
       new \Twig_Function('all_full', array($this, 'all_full')),
       new \Twig_Function('fecha', array($this, 'fecha')),
       new \Twig_Function('base_assets', array($this, 'base_assets')),
       new \Twig_Function('timestamp', array($this, 'timestamp')),
       new \Twig_Function('desde_date', array($this, 'desde_date')),
       new \Twig_Function('cero_izq', array($this, 'cero_izq')),
       new \Twig_Function('last_day_month', array($this, 'last_day_month')),
       new \Twig_Function('str_to_time', array($this, 'str_to_time')),
       new \Twig_Function('desde_date', array($this, 'desde_date')),
       new \Twig_Function('twig_json_decode', array($this, 'twig_json_decode')),
       new \Twig_Function('numero_letras', array($this, 'numero_letras'))
    );
   }

  /**
   * Identificador único para la extensión de twig
   *
   * @return string con el nombre de la extensión
   */
  public function getName() : string {
        return 'ocrend_framework_func_class';
  }
}
