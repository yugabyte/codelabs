<?php
get_header();
?>

<div class="container-fluid">

  <div class="row flex-xl-nowrap breadcrumb">
    <span class="breadcrumb-item"><a href="#">Home</a></span>
    <span class="breadcrumb-item active" aria-current="page">This Page Name</span>
  </div>

  <div class="row flex-xl-nowrap section-top-spacing">
    <div class="col-12 col-md-3 col-xl-2 bd-sidebar">

      <nav class="bd-links" id="bd-docs-nav">

        <div class="bd-toc-item">
            <a class="bd-toc-link" href="/docs/4.3/getting-started/introduction/">
              Getting started
            </a>
        </div>

        <div class="bd-toc-item active">
          <a class="bd-toc-link" href="/docs/4.3/layout/overview/">
            Layout
          </a>
        </div>

        <div class="bd-toc-item">
            <a class="bd-toc-link" href="/docs/4.3/utilities/borders/">
              Utilities
            </a>
        </div>
      </nav>

    </div> <!-- bd-sidebar -->
        

    <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
      <h1 class="bd-title" id="content">Grid system</h1>
      <p class="bd-lead">Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.</p>    
    </main>

  </div>
</div>

<?php
get_footer();
