Route::get('/recipe-home', '\App\Http\Controllers\RecipeController@getRecipeHome')->name('recipehome');
Route::get('/parse-recipe', function(){
    $crawler = Goutte::request('GET', 'https://www.indianhealthyrecipes.com/dal-fry-recipe/');
    $crawler->filter('div > div > p')->each(function ($node) {
      $text = $node->text();
      echo $text;
      $extractedoutput []= array('steps'=> $text);
    });
    return view('recipe.parsedData',compact('extractedoutput'));
});