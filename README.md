    • Kas ir API?
    Aplikāciju programmēšanas interfeiss, noteiktai programmai piederošs koda kopums caur kuras izmantošanu ārējas programmas ir spējīgas veikt darbības ar noteikto programmu.

    • Kā deklarēt mainīgo PHP valodā?
    Lietojot $ zīmi, piem. $mainigais

    • Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
    Arhitektūra saucas MVC Model View Controller.
    Eksistē 'Model' kas ir datubāze
    Eksistē 'Controller' kas ir spējīgs mainīt datu bāzi
    Eksistē 'View' kas ir spējīgs pieprasīt mainīt datu bāzi
    Tos arī var saprast kā atsevišķas programmas piem. veido ar 
    php artisan make:model User
    php artisan make:controller UserController
    un View veido arī atsevišķi tikai parasti izmantojot templates.

    • Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
    Object relational mapping, programmatūra kura ir spējīga pielietot oop līdzīgu kodu un pārvērst to sql querijos.
    Mazāk koda lai uzrakstītu to pašu darbību, vieglāk optimizēt, grūtāk rakstīt bez sakarīgas struktūras.

    • Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
    public function index() {
    return response()->json(User::('rating', '>', 4)->get());
    }
