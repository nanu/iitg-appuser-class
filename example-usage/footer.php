		</div>

	</div>
	
	<?php
	//Check if the user is logged in
	if( $iitgAppUser->is_logged_in() )
	{
		echo "<hr style='width: 100%; background:#FF0000; border:0; height:1px;' />";
		echo "<p><font size='1'color='#0000A0'><em>Last updated on :</em> <strong>".date('j F Y', getlastmod())."</strong></font></p>";
		echo "<hr style='width: 50%; border-top: 1px dashed #0000A0; border-bottom: 1px dashed #FFFFFF;' />";
		echo "<p><font size='1'color='#0000A0'><pre>this software is licensed under GNU General Public License v3.0</pre></font></p>";
		
	}
	?>

</center>
</body>
</html>
