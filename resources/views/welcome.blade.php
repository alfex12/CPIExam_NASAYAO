<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
                <div class="mt-16">
                     <form method="post" action="/posts">
                        <label>Post Title</label>
                        <input type="text" name="post_title">
                        <label>Post Details</label>
                        <input type="text" name="post_details">
                        <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
    </body>

    
</html>
<script type="text/javascript">
        
</script>

