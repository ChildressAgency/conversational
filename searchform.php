<form action="<?php echo esc_url(home_url()); ?>" method="get">
  <div class="form-row align-items-center justify-content-center">
    <div class="col-auto">
      <label for="search" class="sr-only">search</label>
      <input type="text" id="search" name="s" class="form-control form-control-lg" placeholder="Search" />
    </div>
    <div class="col-auto">
      <button type="submit" class="btn-search" aria-label="Search">
        <span class="sr-only"><?php echo esc_html__('Search', 'conversational'); ?></span>
      </button>
    </div>
  </div>
</form>