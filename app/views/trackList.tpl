{extends file = "main.tpl"}
{block name=search}
            <section id='search'>
  <form class="form-inline my-2 my-lg-0" method="post" action="{rel_url action='trackList' p='1'}">
      <input class="form-control mr-sm-2" type="text" placeholder="Search Tracks" aria-label="Search Tracks" name="sf_trackname" value="{$searchForm->trackName}"/>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        </section>
      {/block}
{block name=content}
<table class="table table-hover">
<thead>
	<tr>
		<th scope="col">#</th>
		<th scope="col">Name</th>
	</tr>
</thead>
<tbody>
{foreach $track as $t}
{strip}
	<tr>
		<td>{$t["idTrack"]}</td>
		<td>{$t["TrackName"]}</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    {if $page==1}<li class="page-item"><a class="page-link">Previous</a></li>
    {else}<li class="page-item"><a class="page-link" href="{rel_url action="trackList" p={$page}-1}">Previous</a></li>{/if}
    {if ($offset-($size*3))>=0}<li class="page-item"><a class="page-link" href="{rel_url action="trackList" p={$page}-3}">{$page-3}</a></li>{/if}
    {if ($offset-($size*2))>=0}<li class="page-item"><a class="page-link" href="{rel_url action="trackList" p={$page}-2}">{$page-2}</a></li>{/if}
    {if ($offset-($size*1))>=0}<li class="page-item"><a class="page-link" href="{rel_url action="trackList" p={$page}-1}">{$page-1}</a></li>{/if}
    <li class="page-item active">
      <a class="page-link" href="{rel_url action="trackList" p={$page}}">{$page} <span class="sr-only">(current)</span></a>
    </li>
    {if ($offset+($size*1)+1) < $max}<li class="page-item"><a class="page-link" href="{rel_url action="trackList" p={$page}+1}">{$page+1}</a></li>{/if}
    {if ($offset+($size*2)+1) < $max}<li class="page-item"><a class="page-link" href="{rel_url action="trackList" p={$page}+2}">{$page+2}</a></li>{/if}
    {if ($offset+($size*3)+1) < $max}<li class="page-item"><a class="page-link" href="{rel_url action="trackList" p={$page}+3}">{$page+3}</a></li>{/if}
    {if $page == $max_page}
    <li class="page-item disabled"><a class="page-link">Next</a>
    </li>
    {else}
      <li class="page-item">
      <a class="page-link" href="{rel_url action="trackList" p={$page}+1 }">Next</a>
    </li>  
    {/if}
  </ul>
</nav>

{/block}