<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

use App\Models\User;



class CreateUsersRole extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::table('users', function (Blueprint $table) {

            //

            $table->string('role')->default(User::ROLE_USER); // 加入角色欄位

        });

    }



    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::table('users', function (Blueprint $table) {

            //

            $table->dropColumn('role');

        });

    }

}