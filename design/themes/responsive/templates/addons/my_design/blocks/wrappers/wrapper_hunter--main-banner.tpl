{if $content|trim}
    {capture name="main_banner_h"}
        <div class="main-banner--hunter">
            {$content nofilter}
        </div>
    {/capture}
{/if}