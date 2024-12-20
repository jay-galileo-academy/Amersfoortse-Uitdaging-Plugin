<?php 
/**
 * @package VraagEnAanbod
 */

class VEAklantAanvraagMail
{ 

    public function klantAanvraagBody($type) {

        $body = "
        <body>
            <table cellspacing='0' cellpadding='0' border='0' role='presentation' width='600' align='center' class='main-table'>
            <tr>
                <td>
                    <h1 class='text-centered' style='color:#05415E;'>Je $type is succesvol geplaatst</a>.</h1>
                </td>
            </tr>
            <tr>
                <td height='3' style='width:100%;background:#05415E;'>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Je $type is verwerkt en terug te vinden op de <a href='https://amersfoortseuitdaging.nl/'>Amersfoortse Uitdaging</a>.</p>
                    <p>Ziet je $type er niet zo uit als verwacht? Neem dan contact op met: <a href='mailto:info@amersfoortseuitdaging.nl'>info@amersfoortseuitdaging.nl</a></p>
                </td>
            </tr>
            </table>
        </body>
        ";

        return $body;
    }
}