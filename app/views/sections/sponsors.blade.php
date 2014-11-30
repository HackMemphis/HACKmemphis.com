<!-- section_sponsors.php start -->
<section id="sponsors">
    <div class="row">
        <h1 class="section-title"><span>2014 Sponsors</span></h1>
        <ul class="sponsor-list">

            @foreach ($sponsors['2014'] as $sponsor)
                <li class="two columns">
                    <a href="{{ $sponsor->link }}" target="_blank">
                        <img src="{{ $sponsor->logo_path }}"
                             class="attachment-square wp-post-image"
                             alt="{{ $sponsor->alt_text }}" />
                    </a>
                </li>
            @endforeach

            <li class="two columns">
                <a href="" target="_blank">
                    <img src="" class="attachment-square wp-post-image"
                         alt="" />
                </a>
            </li>

        </ul>
    </div> <!-- .row < #sponsors -->
    <div class="row">
        <h1 class="section-title"><span>2013 Sponsors</span></h1>
        <ul class="sponsor-list">

            @foreach ($sponsors['2013'] as $sponsor)
                <li class="two columns">
                    <a href="{{ $sponsor->link }}" target="_blank">
                        <img src="{{ $sponsor->logo_path }}"
                             class="attachment-square wp-post-image"
                             alt="{{ $sponsor->alt_text }}" />
                    </a>
                </li>
            @endforeach

            <li class="two columns">
                <a href="" target="_blank">
                    <img src="" class="attachment-square wp-post-image"
                         alt="" />
                </a>
            </li>

        </ul>
    </div> <!-- .row < #sponsors -->
</section> <!-- #sponsors -->
<!-- section_sponsors.php end -->