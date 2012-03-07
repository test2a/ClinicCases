<div class="user_display ui-widget ui-widget-content ui-corner-bottom user_widget" tabindex="1">

</div>

<div class="case_detail_panel_tools">

	<div class="case_detail_panel_tools_left"></div>

	<div class="case_detail_panel_tools_right">

		<input type="text" class="contacts_search" value="Search Contacts">

<?php
	if ($_SESSION['permissions']['add_contacts'] == '1')
		{echo "<button class='new_contact'>New Contact</button>";}

?>


	</div>

</div>

<div class="case_detail_panel_casenotes">

	<div class='csenote csenote_new'>
			<form>
			<div class='csenote_bar'>
				<div class = 'csenote_bar_left'><img src='$this_thumb'> $this_fname $this_lname</div>
				<div class = 'csenote_bar_right'>

				<button class='csenote_action_submit'>Add</button><button class='csenote_action_cancel'>Cancel</button></div>
			</div>
			</form>
			</div>

<?php

	foreach($contacts as $contact)
			{

				echo "
				<div class='csenote'>
					<div class='csenote_bar contact_bar'>
						<div class = 'csenote_bar_left'><h4>". $contact['first_name'] . " " . $contact['last_name'] . "</h4><h5>" . $contact['type']  . "</h5></div>
						<div class = 'csenote_bar_right'>";

						if ($_SESSION['permissions']['edit_contacts'] == '1')
							{echo "<a href='#' class='csenote_edit'>Edit</a> ";}

						if ($_SESSION['permissions']['delete_contacts'] == '1')
							{echo "<a href='#' class='csenote_delete'>Delete</a>";}

						echo "
						</div>
					</div>
				</div>";

			}

			if (empty($contacts))
				{echo "<p>No contacts found.</p>";}
?>

</div>