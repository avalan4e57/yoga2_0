
<div class="nidra">
    <?
        $query = "SELECT * FROM asanas.nidra WHERE audio_publish='Y'";
        $nidraArray = mysql_query($query); 
        $nidraArrayLength = 0;
        while($nidra = mysql_fetch_array($nidraArray))
        {
            $nidraArrayLength++;
            echo "<h4 class='top-buffer'>$nidra[audio_id]. $nidra[audio_h4]<small> $nidra[audio_s_desc]</small></h4>";
            echo "<audio controls id='my-audio-id-$nidra[audio_id]'><source src='$nidra[audio_src]' type='audio/mpeg'/></audio>";
        }  
    ?>
</div>


<!-- Скрипты управления элементами audio -->
<script type="text/javascript">
    // Функция stop для Audio:
    HTMLAudioElement.prototype.stop = function()
    {
        this.pause();
        this.currentTime = 0.0;
    }

    var audios = [];
    for (var j = 1; j <= <?=$nidraArrayLength?>; j++)
    {
        audios.push(document.getElementById('my-audio-id-'+j));
        // Включаем на прослушку событие "одно из audio проигрывается"
        audios[j-1].addEventListener('play', changeAudio);
    }
    
    // Функция обработки события для остановки текущего audio в пользу запущенного нового audio
    function changeAudio() {
        for (var i = 0; i < audios.length; i++) {
            if (audios[i] == this)
                continue;
            else {
                audios[i].stop();
            }
        } 
    }
</script>