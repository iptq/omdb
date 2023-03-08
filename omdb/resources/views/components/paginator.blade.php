<div class="pagination">
  @if ($page > 1)
    <b>
      <a class="arrow" href='?{{ $page_variable }}=1'>&laquo;</a>
      <a class="arrow"
        href='?{{ $page_variable }}={{ $page - 1 }}'>&lsaquo;</a>
    </b>
  @endif

  @for ($i = max(1, $page - 2); $i < $page; $i++)
    <a class="page"
      href='?{{ $page_variable }}={{ $i }}'>{{ $i }}</a>
  @endfor

  <span class="page current">{{ $page }}</span>

  @for ($i = $page + 1; $i < min($page + 3, $num_pages + 1); $i++)
    <a class="page"
      href='?{{ $page_variable }}={{ $i }}'>{{ $i }}</a>
  @endfor

  @if ($page < $num_pages)
    <b>
      <a class="arrow"
        href='?{{ $page_variable }}={{ $page + 1 }}'>&rsaquo;</a>
      <a class="arrow"
        href='?{{ $page_variable }}={{ $num_pages }}'>&raquo;</a>
    </b>
  @endif
</div>
