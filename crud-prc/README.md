# Learn Laravel

-   Earlier i used to create every thing separately like model,migration,controller now when i go through documentation
-   We can execute one command and with that create multiple classes at once.

```

php artisan make:model Product -mc



```

-   In the above command we have created model,migration and controller
-   Product model, products table(migration), ProductController

## laravel table creation

-   when we use string type for image we actually store the filename only right

-   Yes, that's correct. When you use the `string` type for storing images in Laravel migrations, you typically store the filename (or the path to the image file) rather than the actual image data. Storing just the filename (or path) allows you to keep the database lightweight while still providing a reference to the image file that can be used to retrieve it from the file system.

-   Here's an example of using the `string` type to store the filename of an image:

```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('filename'); // column to store the filename of the image
            // You can add more columns for other image metadata if needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
```

-   With this setup, you would store the actual image file on your file system (e.g., in the `storage/app/public` directory) and store just the filename (or path) in the `filename` column of the `images` table.
-   Then, when you need to display or work with the image, you would use the filename (or path) to retrieve it from the file system. This approach is generally more efficient and scalable compared to storing images directly in the database.

### Then which database actually uploads the image directly ?

Several databases support storing binary data such as images directly, including:

1. **MongoDB**: MongoDB is a NoSQL document database that supports storing binary data in BSON (Binary JSON) format. You can store images directly in MongoDB collections as binary data.

2. **GridFS**: While not a separate database, MongoDB offers GridFS as a specification for storing and retrieving large files such as images. GridFS stores files as separate documents in a MongoDB collection, allowing you to store files larger than the BSON document size limit.

3. **Couchbase**: Couchbase is a NoSQL database that supports binary data storage. You can store images directly in Couchbase as binary data.

4. **PostgreSQL**: PostgreSQL is a relational database that supports the `BYTEA` data type for storing binary data. You can store images directly in PostgreSQL by using the `BYTEA` data type.

5. **SQL Server**: Microsoft SQL Server supports the `VARBINARY` data type for storing binary data. You can store images directly in SQL Server by using the `VARBINARY` data type.

6. **MySQL**: MySQL also supports the `BLOB` data type for storing binary data. You can store images directly in MySQL by using the `BLOB` data type.

However, while it's technically possible to store images directly in databases, it's generally not recommended for large files like images due to performance, scalability, and maintenance concerns. Storing images in databases can lead to increased storage requirements, slower performance, and database bloat.

Instead, a common practice is to store images in a file system or a cloud-based storage service (e.g., Amazon S3, Google Cloud Storage) and store references to these images (e.g., filenames, URLs) in the database. This approach allows for more efficient storage, faster retrieval, and easier management of images.

## Laravel Migration

For Creating you may need to check or refer datatypes but in laravel documentation specified as **Available Column Types**

If I want to check the status or which are the following migrations to be done use **--pretend**

```php

   php artisan migrate:status
   php artisan migrate --pretend

```
