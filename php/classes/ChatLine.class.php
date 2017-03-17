<?php

/* Chat line is used for the chat entries */

class ChatLine extends ChatBase{
	
	protected $text = '', $author = '', $email = '';
	
	public function save(){
		DB::query("
			INSERT INTO Chatdata (author, email, text)
			VALUES (
				'".DB::esc($this->author)."',
				'".DB::esc($this->email)."',
				'".DB::esc($this->text)."'
		)");
		
		// Returns the MySQLi object of the DB class
		
		return DB::getMySQLiObject();
	}
}

?>