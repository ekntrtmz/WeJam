<!-- Main container -->
<nav class="level container">
  <!-- Left side -->
  <div class="level-left">
    <div class="level-item">
      <div class="field has-addons">
        <p class="control">
          <button id="addon-city-select" class="button is-static is-small">
            <span>in</span>
          </button>
        </p>
        <p class="control">
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu4">
              @if (Auth::user()->current_city)
              <span>{{ __(Auth::user()->current_city) }}</span>
              @else
              <span>{{ __('Select your city') }}</span>
              @endif
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Barcelona
                </a>
                <a href="#" class="dropdown-item">
                  Paris
                </a>
                <a href="#" class="dropdown-item">
                  London
                </a>
                <a href="#" class="dropdown-item">
                  Rome
                </a>
                <a href="#" class="dropdown-item">
                  Istanbul
                </a>
                <a href="#" class="dropdown-item">
                  Tel Aviv
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <span class="icon is-medium">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="is-link">Add City</span>
                  </a>
              </div>
            </div>
          </div>
        </p>
      </div>
    </div>
  </div>

  <!-- Right side -->
  <div class="level-right">
    <p class="level-item">
      <a class="button is-primary is-inverted is-outlined is-small">
          <span class="icon">
            <i class="fas fa-plus-circle"></i>
          </span>
          <span>Create Jam</span>
      </a>
    </p>
  </div>
</nav>
