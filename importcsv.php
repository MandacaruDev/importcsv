<html>
    <head>
        <title>Simulado em Rede</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <h1>Importação CSV</h1>
        <?php   
         include("../connect.php");  
            $nome_arquivo = "../100.csv";
            $objeto = fopen($nome_arquivo, 'r');
            
            while(($dados = fgetcsv($objeto, 1000, ",")) !== FALSE){
               $sql = "INSERT INTO simrede 
                                 (
                                    codsiem,nmaluno,nmescola,serie,simulado,datacad,
                                    nota1,nota2,nota3,nota4,nota5,nota6,nota7,nota8,
                                    nota9,nota10,nota11,nota12,nota13,nota14,nota15,
                                    nota16,nota17,nota18,nota19,nota20
                                 )
                        VALUES 
                                 (
                                    '$dados[0]','$dados[1]','$dados[2]','$dados[3]','Simuado em rede-1',
                                     CURDATE(),'$dados[10]','$dados[11]','$dados[12]','$dados[13]',
                                    '$dados[14]','$dados[15]','$dados[16]','$dados[17]','$dados[18]',
                                    '$dados[19]','$dados[20]','$dados[21]','$dados[22]','$dados[23]',
                                    '$dados[24]','$dados[25]','$dados[26]','$dados[27]','$dados[28]',
                                    '$dados[29]'
                                 )"; 
                                mysql_query($sql) or die(mysql_error());
                                //echo  $sql."br";
               /* echo '<pre>';
                print_r($dados);
                 echo '</pre>';*/
            }
            fclose($objeto);
            echo "Processo Finalizado.";
        ?>
    </body>
</html>
