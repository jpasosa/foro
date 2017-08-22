<?php



class CreatePostsTest extends FeatureTestCase
{



	function test_a_user_create_a_post()
	{


		// HAVING . . .lo que tenemos
		$user = $this->defaultUser();

		$title = 'Esta es una pregunta';
		$content = 'Este es el contenido';


		// WHEN . . lo que sucede, los eventos
		$this->actingAs( $user )
				->visit(route('posts.create'))
				->type( $title, 'title')
				->type( $content, 'content')
				->press('Publicar');


		// THEN . ..  esperamos un resultado
		$this->seeInDatabase('posts', [
				'title' => $title,
				'content' => $content,
				'pending' => true,
				'user_id' => $user->id,
			]);
		// test if the user is redirect to the post details after creating it.
		$this->see($title);


	}





}


