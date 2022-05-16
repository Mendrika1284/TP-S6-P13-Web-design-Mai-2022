<p>Selon l’évaluation nationale du climat, 
    les influences humaines sont la <b>première cause du réchauffement climatique</b>, 
    en particulier la pollution par le <b>carbone</b> que nous causons en brûlant des combustibles fossiles et la pollution que nous empêchons en détruisant les forêts. 
    Le dioxyde de carbone, le méthane, la suie et les autres polluants que nous rejetons dans l’atmosphère agissent comme une couverture, 
    emprisonnant la chaleur du soleil et provoquant le réchauffement de la planète. 
    Les faits montrent que la période 2000-2009 a été <b>la plus chaude de toutes les décennies</b> depuis au moins 1 300 ans. 
    Ce réchauffement modifie de manière considérable le système climatique de la Terre, y compris ses terres, son atmosphère, ses océans et ses glaces.
</p>
<p>La suite:</p>
<?php foreach($consequence as $key){ ?>
    <h4><a href="<?php echo site_url('listeconsequence')."/".$key['url']."-".$key['id']; ?>"><?php echo $key["id"]; ?> - <?php echo $key["titre"]; ?></a><br></h4>
<?php } ?>