<?php
include_once '../Plugins/Libs/helper.php';
include_once '../Plugins/Model/User.php';
include_once '../Modelos/Usuario.php';

class controladorEmail
{

    public function EnviarEmail()
    {
        $nombre    = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email     = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $mensaje   = $_POST['message'];

        $correo = 'Nombre:' . $nombre . '<br><br>Apellidos:' . $apellidos . '<br><br>Correo Electronico:' . $email . '<br><br>Dirección:' . $mensaje;
        $this->load->library('email');
        $this->mail->from('isc.deynerisai@gmail.com');
        $this->mail->to('deynerjd1116@gmail.com');

        $this->mail->subject('Correo del sitio web');
        $this->mail->message($correo);

        if ($this->mail->send()) {
            redirect(base_url());
        } else {
            redirect(base_url());
        }
    }
}
