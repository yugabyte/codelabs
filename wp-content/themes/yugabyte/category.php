<?php
get_header();

$categories = get_the_category();
$category = $categories[0];
//print_r($category);

$args = array(
          'category'   => $category->cat_ID
        );
//print_r($args);

$steps = get_posts($args);
//print_r($steps);

// The step that is chosed as the default.
$step_id = 0;
?>

<div class="container-fluid">

  <div class="row flex-xl-nowrap breadcrumb">
    <span class="breadcrumb-item"><a href="/">Home</a></span>
    <span class="breadcrumb-item active" aria-current="page"><?php echo $category->name ?></span>
  </div>

  <div class="row flex-xl-nowrap section-top-spacing">
    <div class="col-12 col-md-3 col-xl-2 bd-sidebar">

      <ul class="bd-links list-group" id="bd-docs-nav">
        <?php for ($idx = 0; $idx < count($steps); $idx++) { ?>
          <li class="bd-toc-item list-group-item list-group-item-light <?php if ($step_id == $idx) echo "active"; ?>"
               id="bd-toc-item-<?php echo $idx; ?>">
              <a class="bd-toc-link" href="javascript:handle_step_click(<?php echo $idx ?>)">
                <?php echo $steps[$idx]->post_title; ?>
              </a>
          </li>
        <?php } ?>
      </ul>

    </div> <!-- bd-sidebar -->


    <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
      <?php for ($idx = 0; $idx < count($steps); $idx++) { ?>
        <div class="bd-content-step-content <?php if ($step_id != $idx) echo "d-none"; ?>"
             id="bd-content-step-<?php echo $idx ?>">
          <h1 class="bd-title" id="content"><?php echo $steps[$idx]->post_title; ?></h1>
          <div><?php echo $steps[$idx]->post_content ?></div>  
        </div> <!-- bd-content-step-1 -->
      <?php } ?>
    </main>

  </div>
</div>

<script type="text/javascript">
  function handle_step_click(step_id) {
    // Hide the old content.
    //$(".bd-toc-item").removeClass("active");
    $(".bd-toc-item").each(function(index) {
      if (index < step_id) {
        $(this).removeClass("active list-group-item-light").addClass("list-group-item-secondary");
      } else {
        $(this).removeClass("active").addClass("list-group-item-light");
      }
    })
    $(".bd-content-step-content").addClass("d-none");

    // Display the new content.
    $("#bd-toc-item-" + step_id).addClass("active");
    $("#bd-content-step-" + step_id).removeClass("d-none");
  }
</script>

<?php
get_footer();
