<!-- section_sponsors.php start -->
<section id="sponsors">
    <div class="row">
        <h1 class="section-title"><span>2015 Sponsors</span></h1>
        <ul class="sponsor-list">

            @if (array_key_exists('2015', $sponsors))
                @foreach ($sponsors['2015'] as $sponsor)
                    <li class="two columns">
                        <a href="{{ $sponsor->link }}" target="_blank">
                            <img src="{{ $sponsor->logo_path }}"
                                 class="attachment-square wp-post-image"
                                 alt="{{ $sponsor->alt_text }}" />
                        </a>
                    </li>
                @endforeach
            @else
                <li class="columns">
                    <a href="/HACKmemphis-prospectus.pdf" target="_blank">
                        <h2>Sponsor HACKmemphis 2015</h2>
                    </a>
                </li>
            @endif

            {{--<li class="two columns">--}}
                {{--<a href="" target="_blank">--}}
                    {{--<img src=""--}}
                         {{--class="attachment-square wp-post-image"--}}
                         {{--alt="" />--}}
                {{--</a>--}}
            {{--</li>--}}

        </ul>
    </div> <!-- .row < #sponsors -->
    <div class="row">
        <h1 class="section-title">
            <span>
                <a href="/sponsors">Previous Sponsors</a>
            </span>
        </h1>
    </div>
</section> <!-- #sponsors -->
<!-- section_sponsors.php end -->