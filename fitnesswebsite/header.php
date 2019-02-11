<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <?php wp_head(); ?>

        <!-- Structured data for SEO -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Blog",
          "url": "http://www.fitness.com",
          "description": "Your resource for fitness, food, and fun!"
        }
        </script>

    </head>

    <!-- this function closes the jumbo ad after time passes-->
    <body onload="jumbo_close_timed();">
        <div class="container">
            <div class="row">
              <header class="col-12">
                  <h1>Fitness Website</h1>
              </header>
              <div id="jumbo_ad">
                  <a href="https://www.google.com" target="_blank">
                      <img src="https://via.placeholder.com/728x600.png?text=Jumbo+Ad" class="img-fluid" alt="Jumbo Ad" >
                  </a>
                  <p onclick="jumbo_close()">Close this ad</p>
              </div>
            </div>
