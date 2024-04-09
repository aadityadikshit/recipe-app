<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Request;
use Route;
/*
 * @package laravel
 * @subpackage Controller
 */
class RecipeController extends Controller
{
    public function getRecipeHome(){
        return view('recipe.homepage');
    }

    public function parseRecipe($recipeurl){
        $auth_token = csrf_token();
        echo "Recipe URL";exit();
    }

}
?>