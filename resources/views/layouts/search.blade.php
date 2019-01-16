<div class="form-inline ml-3">
  <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar"
           @keyup.enter="searchit" v-model="search" type="search" 
           placeholder="Search" aria-label="Search"
    >

    <div class="input-group-append">
      <button class="btn btn-navbar" @click="searchit">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
</div>