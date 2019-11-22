<?php

use Illuminate\Database\Seeder;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'title' => "Maple-mustard pulled pork",
                'ingredients' =>
                    "200g sea salt\n\n300g light muscovado sugar\n\n2kg/4lb 8oz piece pork shoulder\n\n100ml maple syrup\n\n100g wholegrain mustard\n\n2 tbsp English mustard powder\n\n",
                'img' =>
                    "http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/user-collections/my-colelction-image/2015/12/recipe-image-legacy-id--1119469_10.jpg?itok=2GIQyKfz"
            ),
            array(
                'title' => "Salmon & spinach with tartare cream",
                'ingredients' =>
                    "1 tsp sunflower or vegetable oil\n\n 2 skinless salmon fillet\n\n 250g bag spinach\n\n 2 tbsp reduced-fat crème fraîche\n\njuice ½ lemon\n\n 1 tsp caper, \n\n 2 tbsp flat-leaf parsley, chopped\n\nlemon wedges, to serve",
                'img' =>
                    "http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/user-collections/my-colelction-image/2015/12/recipe-image-legacy-id--52867_12.jpg?itok=pnLXWqFK"
            ),
            array(
                'title' => "Spicy black bean tacos",
                'ingredients' =>
                    "1 tbsp vegetable oil\n\n3 garlic cloves, chopped\n\n3 x 400g cans black beans, drained and rinsed\n\n3 tbsp cider vinegar\n\n1 ½ tbsp honey\n\n1 ½ tbsp smoked paprika\n\n1 ½ tbsp ground cumin\n\n1 small garlic clove\n\n2 tbsp roughly chopped coriander\n\n1 green chilli, sliced\n\n2 avocados, halved and stoned\n\njuice 1 lime\n\n110g pack pomegranate seeds\n\n1 green chilli, finely diced\n\n1 small white onion, finely diced\n\nsmall handful fresh coriander, chopped",
                'img' =>
                    "http://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2016/05/spicy-black-bean-tacos.jpg?itok=RTBXRL7L"
            ),
            array(
                'title' => "Creamy Potato Salad With Bacon",
                'ingredients' =>
                    "3 pounds small red new potatoes (about 24),kosher salt and black pepper, 8 slices bacon, 1/2 cup mayonnaise, 1/4 cup sour cream, 3 tablespoons white wine vinegar, 4 stalks celery, thinly sliced 1/2 cup chopped fresh flat-leaf parsley, 1/4 cup chopped fresh tarragon ",
                'img' =>
                    "https://www.keyingredient.com/media/91/dc/5be0d6a05b33b89e6e04794a0f73460e3acf.jpg/rh/bacon-ranch-sour-cream-potato-salad.jpg"
            ),
            array(
                'title' => "Chile Corn Fritters",
                'ingredients' =>
                    "2 quarts canola oil ,1¼ cups medium-grind yellow cornmeal ,1¼ cups (about 5⅜ oz.) all-purpose flour ,2 tablespoons granulated sugar, 1½ teaspoons baking powder ,2 teaspoons kosher salt, divided 2 large eggs, lightly beaten 1 cup whole buttermilk ,2 tablespoons unsalted butter, melted 2 cups fresh yellow corn kernels (4 ears), 2 (4½-oz.) cans hot diced green chiles, drained ¼ cup sliced scallions (from 1 bunch) ",
                'img' =>
                    "https://cdn-ap-ec.yottaa.net/57eaa34c2bb0ac1299000018/www.foodinaminute.co.nz/v~4b.2f/var/fiam/storage/images/recipes/chilli-corn-fritters/1285033-13-eng-US/Chilli-Corn-Fritters_recipeimage.jpg?yocs=5_&yoloc=ap"
            )
            //...
        );

        DB::table('foods')->insert($data);
    }
}
