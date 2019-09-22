Register Char Type To Doctrine Dbal library's types map , 
This package enables changing a column's type to char type when using laravel's migration schema  

The solution is inspired by [Muhammad Zamroni's article](https://medium.com/@matriphe/adding-custom-char-type-in-laravel-migration-780d8a9cac29)

## Usage:
```bash
composer require coolseven/laravel-migration-char-type
```

```php
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePrimaryKeyFromIntToCharOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            // before change : $table->bigIncrements('id');
            $table->char('id',36)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){
            $table->bigIncrements('id')->change();
        });
    }
}
```

## TODO
- [ ] adding tests
