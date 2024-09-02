<?php
// Comando PowerShell que você deseja executar
$command = 'powershell.exe pnputil /enum-devices';

// Executa o comando PowerShell usando exec() e captura a saída
exec($command, $output, $return_var);

$dispositivo = 'TV-';

for ($i = 0; $i < count($output); $i++) {
    if (strrpos($output[$i], $dispositivo)) {
        $id_remove = substr($output[($i - 1)], 32, 86);

        # echo $id_remove;
        $command_remove =  'pnputil /remove-device "' . $id_remove . '"';

        #
        exec($command_remove, $output_remove, $return_var_remove);
        var_dump($output_remove);
    }
}
echo "Todos dispositivos com o nome " . $dispositivo . " foram removidos";
/**
 * Esse script foi criado pois meu notebook começou a replicar as saídas de audio de minha televisão
 * ao ser conectado via hdmi... Após algum tempo, meus dispositivos começaram a apresentar falhas e notei que
 * haviam 170 televisões reconhecidas por ele com o mesmo nome.. 
 * 
 * Para resolver isso, eu passei a utilizar o powershell para listar os dispositivos instalados.
 * 
 * Com isso, eu busquei por todos que continham o nome da TV em questão, para não remover coisas que não deveria..
 * Filtrei pelo id que o powershell me retornava (que vinha sempre na linha anterior a descrição do dispositivo)
 * e utilizei o substr para cortar a parte de descrição anterior ao ID.
 */
