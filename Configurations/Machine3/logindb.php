<?php
$host="localhost";
$username="root";
$password="I#3nKB!2Y2Gi";
$db_name="main";
$tbl_name="login";
$conn = mysqli_connect( $host, $username, $password, $db_name);
if (mysqli_connect_errno()) {
            echo ("Connection Failed: " . mysqli_connect_error());
                exit();
}
$myusername =$_POST['usr'];
$mypassword=$_POST['pwd'];
$sql="select * from login where name = '$myusername' and password = '$mypassword'";
if (!mysqli_query($conn,$sql)){
            echo("Error description: " . mysqli_error($conn));
                exit();
}
$result=mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if($count == 1){
        echo "Login successful: 
                -----BEGIN RSA PRIVATE KEY-----
                MIIEogIBAAKCAQEAswVRKCnDLciT8A9sWI82l0iAPp9ZlNNcgWVTulvfDmbsfDSO
                JxM/Rv5RtO2kvc1/EjFhRS85gK4y0R07DOTrQdPdROGHj/A7Oy8BMhHq+EmSIxEE
                Pfye1Mq0Y/Fs4n/s75G0a+Nag1XAGoYw5CssAEPRhxVPQdH9DSU9tCayHf4ZDiPU
                6E1jO6LBkThRh6BOlH1c3BiUDO3e6zQ65fviQDaBkAmG0s5/KybNMpytorzoFq2H
                hU2WnQ7q03PPmeX0ClVse04jZqpNcxM5fMzP/CaRZQg5hv5xNjtBFtBz/Izz6492
                +hN+R9w3iaDOoRjaMUNHtQIGJpbqqS11G8/QKQIDAQABAoIBAGxwYhKkCXhoMUSO
                8yBJz9Wfsx87wzWlOjmfOTJ/iAPfUIyEAT+mJwRH9RJViR73pWtNwg/4ZSqPWnTU
                8foDiIXdYgDhZA5KhHZ7KIw90kkHt5/KJPmvVj6rcs2/ZidlOg58AgAAPcmkXbMz
                adYsWIDok7jxrYq/OjuGPXQspGQJjaV6r7ecTWOKbBuRppNfJIFK98gsIiCKLP9D
                7NHq9cPKukwAwi6/t1nVNdkpFJ99IVAbQAPRygbHnwDj8ZCyPCQH8ryAh6lfXsgd
                mIDFbX3nWWFaSbSwKBaqZpsH6OrPzSB3Fuo4pxJJmevDcRQ/6ocEtsj0pByAWXDe
                CrNkK+kCgYEA1lzS+fhbhsjm2JZvfXuv/HXxX5mGhlNHqfcbNdKPy5XL7PHJNPXD
                5uyIqeJADmuc1RYbArCfFqC/qkqYkZ47B7NtE4JWiCSUXL7lRBmkRWBsY3D8a0ZX
                Mvvl9WF5AVc350j6GSenjbEfw3dO82s75U/SU8eCGg37MlxwV8C14jcCgYEA1csf
                EEq0FtKdRKd7XaEV+BEpqmmwVbAuPQs0Ma0Oot5CttSHjQBHFS8zpXjKAYdCHj2j
                RZM92vJ1UEq5QS1wnyWgTEC4VLXLV0ERaaRUSaK5oSk5YM/hKQGiF2Z4h6n1Lv3y
                c2qm8ymHnIww7887dqkwEUIstuMYFvVp99QCMJ8CgYBQlz9eaUgHyXo4jX5G//xu
                /uyLU43m7GJx/QwG1S3ojV3IrDJILenD5MOQkxYgFcc1uYTYIwz8ldzZKghoHsP0
                pjlo70SXFKGOqNpLGxTOXG0DidPshNp9uYSAF3BF18OVubMFSApPU/ssIqvVCkjP
                co4Rn11DbGQ3T9eQtkvrSwKBgH2GgFuhcPGBgaNArrc/kFWRRiRvX4BALDXdMS0F
                jfVkiEkuqdPI2POAPlOmgvy4vMJisE12cTfvaZ/V78Vr95cJkX+T9GaQQq6dXqrn
                ODHv4AvW14CXLX1VHyWcHaKR0IphwguwEAvvU1dAHK+Avkoidj173CMZXRiFyU0g
                ZpTDAoGAagcSb5TnWXDtL+c2WvhBC/yurcjgWK5uPmiaPsG9Dgd1ODoW/GkQ+h+c
                HhQz+S4P5Mo6KMhgjqwSE/08nnXciYj0492raVhVww5wG+V6YwyRzha0XZvZyzE9
                H1ROcxfCl1cVygihjG2Nyk2giC/haGFUyCu+1mSEw1QqWDupjDM=
-----END RSA PRIVATE KEY-----";
}else{
            echo ("Authentication Failed");
}
?>

