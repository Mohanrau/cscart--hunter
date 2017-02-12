{if $content|trim}
    {capture name="main_menu_h"}
        <ul class="ty-menu__items cm-responsive-menu">
            <div class="container-fluid">
            {$content nofilter}
            </div>
        </ul>
    {/capture}
{/if}