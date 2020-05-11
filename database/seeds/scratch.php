
use Illuminate\Database\Seeder;
use App\Tag;


class TagsSeeder extends Seeder
{
    public function run()
    {
        $tags = [
            
                'category' => "breakfast",
            
                'category' => "lunch",
            
                'category' => "dinner",
            
                'category' => "dessert",
           
                'category' => "gluten free",
           
                'category' => "keto",
           
                'category' => "dairy free",
           
                'category' => "vegetarian",
            
                'category' => "chicken",
            
                'category' => "beef",
            
                'category' => "rice",
           
                'category' => "eggs",
           
                'category' => "quick prep",
           
                'category' => "instant pot",
           
                'category' => "slow cooker",
          
                'category' => "one dish meals"
           


        ];
        //  Recipe::create($tagsArray[0]);
        // foreach ($tagsArray as &$TagsObj) {
            Tag::create($Tags);
        // }
    }
}
