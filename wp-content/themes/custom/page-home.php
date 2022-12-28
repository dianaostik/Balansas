<?php
/**
 * Template name: Pradzia
 */
get_header();
?>
	<?php
		$loop = new WP_Query(
		array(
				'post_type' => 'balansas',
				'orderby' => 'post_id',
				'order' => 'ASC',
			)
			);
	?>

			<table class="lentele" border="1" align="center" cellpadding="10px">
                <thead>
                    <tr>
                        <th colspan="4">Metų balanso lentelė</th>
                    </tr>
					<tr>
						<th>Menuo</th>
						<th>Pajamos</th>
						<th>Išlaidos</th>
						<th>Balansas</th>
                    </tr>
                </thead>
        
                <tbody>
				<tr>
				<?php
					if ($loop->have_posts()) {
						while ($loop->have_posts()) {
							$loop->the_post();
								echo '<tr>';
								echo'<td><b>'.get_field('menuo', get_the_ID()).'</b></td>';
								echo'<td>'.get_field('pajamos', get_the_ID()).'</td>';
								echo'<td>'.get_field('islaidos', get_the_ID()).'</td>';
								echo'<td>'.get_field('balansas', get_the_ID()).'</td>';
								echo'</tr>';
						}				
					}
				?>
				</tr>
                </tbody>
            </table>

        <table class="first">
			<tr>
				<td class="suvestine" > <b> Metų suvestinė: mažiausiai uždirbta: </b><br> liepos mėn. </td>
				<td class="suvestine" > <b> Metų suvestinė: daugiausiai uždirbta: </b><br> rugpjūčio mėn. </td>
				<td class="suvestine" > <b> Metų suvestinė: mažiausiai išlaidų: </b><br>  sausio ir spalio mėn.  </td>
				<td class="suvestine" > <b> Metų suvestinė: daugiausiai išlaidų: </b><br>  kovo mėn. </td>
			</tr>
		</table>
		
		<table class="first">
		<tr>
				<td class="allyear" > <b> Visų metų pajamos: </b> 6000 </td>
				<td class="allyear" > <b> Visų metų išlaidos: </b> 5400 </td>
				<td class="allyear" > <b> Visų metų balansas: </b> 600 </td>
		</tr>
		</table>