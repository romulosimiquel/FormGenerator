<span>Selecionar certidão</span>

		<form method="post">
			<select name="certidao">
				<option value="">Selecione um tipo de certidão</option>
				<option value="1">Certidão de óbito</option>
				<option value="2">Certidão de nascimento</option>
				<option value="3">Certidão de casamento</option>
			</select>

		<input type="submit" value="Pula Boi Pula Cavalo" name="action"/>
		</form>

	<?php
	foreach($tabela as $campo){
		// echo $campo;
		echo "<br>";

		if($campo == 'email'){

			echo "Insira aqui seu email";

			echo '<input type="email" name="'.$campo.'" />';
			echo "<br>";
		} else{
			echo "Insira aqui seu/sua ".$campo;
			echo '<input type="text" name="'.$campo.'" />';
			echo "<br>";
		}
	}
	?>