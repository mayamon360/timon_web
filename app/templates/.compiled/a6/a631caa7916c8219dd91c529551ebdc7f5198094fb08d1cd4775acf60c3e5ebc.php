<?php

/* informacion/ayuda.twig */
class __TwigTemplate_9d923e7a1d11d05747b62f74c16195a3d6797c4aeadc5f659628027250411da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "informacion/ayuda.twig", 1);
        $this->blocks = array(
            'appTitle' => array($this, 'block_appTitle'),
            'appHeader' => array($this, 'block_appHeader'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appTitle($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Ayuda</title>
    <meta name=\"title\" content=\"Ayuda\">
";
    }

    // line 8
    public function block_appHeader($context, array $blocks = array())
    {
        // line 9
        echo "<link rel=\"stylesheet\" href=\"assets/plantilla/libro.css\">
";
    }

    // line 12
    public function block_appBody($context, array $blocks = array())
    {
        // line 13
        echo "
    <main class=\"container mt-2 mb-5\">
\t\t\t        
        <div class=\"container destacados p-0\">
            
            <p class=\"m-0 p-0 text-muted font-weight-bold\"><small class=\"font-weight-bold\">Preguntas</small></p>
            <h1 class=\"m-0 p-0 titulo_destacado\"><i class=\"fas fa-question-circle\"></i> Frecuentes</h1>
            <div class=\"my-1 mb-4 separador separador_color\"></div>

            <ul class=\"nav nav-pills nav-fill flex-column flex-sm-row\" id=\"myTab\" role=\"tablist\">
                <li class=\"nav-item mb-1 mb-sm-0\">
                    <a class=\"nav-link py-2 m-0 active\" id=\"compras-tab\" data-toggle=\"tab\" href=\"#compras\" role=\"tab\" aria-controls=\"compras\" aria-selected=\"true\">
                        Compra en línea
                    </a>
                </li>
                <li class=\"nav-item mb-1 mb-sm-0\">
                    <a class=\"nav-link py-2 m-0\" id=\"envios-tab\" data-toggle=\"tab\" href=\"#envios\" role=\"tab\" aria-controls=\"envios\" aria-selected=\"false\">
                        Envíos
                    </a>
                </li>
                <li class=\"nav-item mb-1 mb-sm-0\">
                    <a class=\"nav-link py-2 m-0\" id=\"cuenta-tab\" data-toggle=\"tab\" href=\"#cuenta\" role=\"tab\" aria-controls=\"cuenta\" aria-selected=\"false\">
                        Mi cuenta
                    </a>
                </li>
            </ul>

            <div class=\"tab-content p-2 pt-5 border-right border-left border-bottom rounded-bottom\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"compras\" role=\"tabpanel\" aria-labelledby=\"compras-tab\">
                    <h6 class=\"text-app\">Requisitos previos</h6>
                    <ul>
                        <li>Se requiere tener una cuenta en nuestro sitio web con tus \"Datos personales\" y \"Dirección de envío\" actualizados.</li>
                        <li>Antes de continuar con tu compra te recomendamos preguntar por la disponibilidad de nuestros productos.</li>
                    </ul>
                    <h6 class=\"text-app\">Pasos</h6>
                    <ol>
                        <li>Usa tus credenciales e \"Ingresa a tu cuenta\" en nuestro sitio web.</li>
                        <li>Localiza los productos que deseas adquirir y agregalos a tu cesta.</li>
                        <li>Si requieres ajustar la cantidad o eliminar productos hazlo desde la sección \"Mi cesta\".</li>
                        <li>Selecciona entre \"Envío a domicilio\" o \"Entrega en sucural\".</li>
                        <li>Da clic en el botón \"Procesar compra\".</li>
                        <li>Selecciona el método de pago:
                            <br>Pago con tarjeta: ingresa en el formulario los datos de tu tarjeta de crédito o débito y después haz clic en el botón \"Procesar pago\".
                            <br>Pago en efectivo: solicita e imprime un vale para pagar en OXXO, al seleccionar este método de pago es importante cierrar la ventana emergente del vale para que los datos puedan ser asociados a tu cuenta correctamente. Utliza el botón \"x\" que aparece en la ezquina superior derecha de la ventana emergente.
                        </li>
                        <li>Después de procesar el método de pago, puedes ver el detalle y seguimiento de tu compra en la sección \"Mis compras\".</li>
                    </ol>
                    <h6 class=\"text-app\">¿Por qué tengo que preguntar por la disponibilidad de los productos?</h6>
                    <p>Además de vender por internet, tenemos una sucursal para punto de venta físico, en ambos canales de venta manejamos el mismo inventarío, lo que puede detonar a la venta o apartado de algún producto en sucursal que dejase sin disponibilidad para su venta en línea.</p>
                    <h6 class=\"text-app\">¿Por qué tengo que proporcionar mis datos para realizar una compra?</h6>
                    <p>Es necesario tener una cuenta registrada en nuestro sitio web para poder asociar los productos adquiridos con la persona que realizo la compra, adémas en caso de solicitar \"Envío a domicilio\" es importante contar con tu RFC y dirección actualizada para agregarlos a la guía que se entrega a paquetería. Usamos el teléfono para ponernos en contacto contigo si existiera alguna duda en la dirección de envío.</p>
                    <h6 class=\"text-app\">¿Cuál es la seguridad en los métodos de pago?</h6>
                    <p>Conectamos nuestro sistema de compra con la pasarela de pagos Stripe.com. Stripe funciona como un intermediario entre nuestros clientes y nosotros \"El timón librería\". Stripe es una plataforma robusta que procesa los pagos cifrando la información en todo momento lo que garantiza la seguridad en cada transacción.</p>
                    <h6 class=\"text-app\">¿Qué sucede después de completar mi compra?</h6>
                    <p>Si el pago fue realizado con tarjeta de crédito o débito, este se verá reflejado de forma casi inmediata en nuestro sistema. Una vez reflejado el pago, preparamos los productos para ser enviados por paquetería o bien para ser entregados en sucursal.<br>Si el pago fue realizado en efectivo mediante un vale OXXO, es importante considerar que este tipo de pagos tardan en verse reflejados en nuestro sistema, por lo que el tiempo de preparación de los productos se hace hasta que el pago sea notificado por Stripe a nuestro sistema.</p>
                    <h6 class=\"text-app\">¿Cómo puedo saber el estatus de mi compra?</h6>
                    <p>Ingresa a tu cuenta en nuestro sitio web y en la sección \"Mis compras\" verás una tabla que lista todos tus compras, en la columna \"Estatus\" podrás saber el estado actual de cada una de ellas, también puedes comunicarte directamente a la sucursal para preguntar sobre el estatus de tu compra en línea, únicamente deberás proporcionar él folió de tu compra, este folio lo encuentras en la tabla antes mencionada.</p>
                </div>
                <div class=\"tab-pane fade\" id=\"envios\" role=\"tabpanel\" aria-labelledby=\"envios-tab\">
                    <h6 class=\"text-app\">Requisitos previos</h6>
                    <ul>
                        <li>Contar con tus \"Datos personales\" y \"Dirección de envío\" actualizados en tu cuenta.</li>
                    </ul>
                    <h6 class=\"text-app\">¿Cuál es el costo de envío?</h6>
                    <p>El costo de envío en montos de compra menores a \$800.00 es de \$220.00, si la compra es igual o mayor a este monto, el envío es completamente gratis.</p>
                    <h6 class=\"text-app\">¿Cuál es el servicio de paquetería que maneja \"El timón librería\"?</h6>
                    <p>Usamos FedEx como servicio de envío de nuestros productos.</p>
                    <h6 class=\"text-app\">¿Cuánto tardan en llegar los productos de mi compra?</h6>
                    <p>Al ser un servicio ajeno a \"El timón librería\" los tiempos de logística dependen de FedEx, por nuestra parte una vez reflejado el pago se preparan los productos para ser entregados a paquetería el mismo día si el horario lo permite de no ser posible se entrega a paquetería al siguiente día hábil a primera hora.</p>
                    <h6 class=\"text-app\">¿Es posible conocer el estatus de mi envío?</h6>
                    <p>Si, al realizar la entrega de tu paquete a FedEx, le proporcionamos una guía con tus datos, una vez que FedEx procesa tu guía podrás visualizar el estatus de tu envío abriendo el enlace que aparece en el detalle de tu compra. Para ver el detalle de tu compra ve a la sección \"Mis compras\" y has clic en el folio de tu compra, se abrirá una pequeña ventana y en la parte superior derecha encontrarás el enlace de rastreo de FedEx con tu número de guía.</p>
                </div>
                <div class=\"tab-pane fade\" id=\"cuenta\" role=\"tabpanel\" aria-labelledby=\"cuenta-tab\">
                    <h6 class=\"text-app\">¿Cómo registro mi cuenta en \"El timón librería\"?</h6>
                    <p>
                        El proceso de registro en nuestro sitio web es muy sencillo, inicialmente necesitas completar el formulario \"Regístrate\" con los datos:
                        <ul>
                            <li>Nombre completo: servira para poder asociar e identificar tus compras en línea.</li>
                            <li>Correo electrónico: en conjunto con tu contraseña servira para poder ingresar a tu cuenta.</li>
                            <li>Contraseña: en conjunto con tu correo electronico serán las credenciales que usaras para poder ingresar a tu cuenta.</li>
                        </ul>
                        Con los datos anteriores bastaría para crear tu cuenta en nuestro sitio web, sin embargo, una vez que hayas iniciado sesión el sistema te pedirá que completes la sección \"Mis datos\" con tus \"Datos personales\" y tu \"Dirección de envío\", estos datos son importantes al momento de realizar una compra.<br><br>
                        <ul>
                            <li>RFC: este dato es necesario, ya que es obligatorio en el formato o guía que se entrega a paquetería.</li>
                            <li>Teléfono: ocupamos este dato para ponernos en contacto contigo si existiera alguna duda en la dirección de envío.</li>
                            <li>Dirección de envío: los datos que conforman la dirección de envío son importantes para que el servicio de paquetería pueda hacer la entrega de tu paquete sin mayor problema, por lo que te pedimos seas lo más preciso posible.</li>
                        </ul>
                        El siguiente video muestra el proceso de registro e inicio de sesión:<br><br>
                        <video src=\"./assets/videos/Crear_cuenta.mp4\" width=\"100%\" class=\"z-depth-2\" controls></video>
                    </p>
                    <h6 class=\"text-app\">¿Qué hago si no puedo registrarme?</h6>
                    <p>
                        Nos han reportado un error al intentar registrar una cuenta, si fuera tu caso te sugerimos limpiar las cookies del navegador e intentar nuevamente, si el error persiste puedes contactarnos por teléfono para ayudarte en el proceso de registro. 
                    </p>
                </div>
            </div>
        </div>
            
    </main>
    
";
    }

    // line 115
    public function block_appFooter($context, array $blocks = array())
    {
        // line 116
        echo "\t<script src=\"assets/jscontrollers/informacion/contacto.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "informacion/ayuda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 116,  155 => 115,  51 => 13,  48 => 12,  43 => 9,  40 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "informacion/ayuda.twig", "/home4/eltimonl/public_html/app/templates/informacion/ayuda.twig");
    }
}
