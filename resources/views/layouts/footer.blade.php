<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">USEFUL LINKS</h6>
                <ul class="footer-ul">
                    <li><a href="http://aust.edu" target="_blank"> AUST Official Website</a></li>
                    <li><a href="http://www.shafaetsplanet.com/planetcoding/" target="_blank"> Shafaets Planet</a></li>
                    <li><a href="https://stackoverflow.com" target="_blank"> StackOverFlow</a></li>
                    <li><a href="https://github.com" target="_blank"> GitHub</a></li>
                    <li><a href="#"> Ranking</a></li>
                    <li><a href="#"> Frequently Ask Questions</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">Online Judge</h6>
                <ul class="footer-ul">
                    <li><a href="https://uva.onlinejudge.org" target="_blank"> UVA Online Judge</a></li>
                    <li><a href="https://www.urionlinejudge.com.br/judge/en/login" target="_blank"> URI Online Judge</a></li>
                    <li><a href="http://codeforces.com" target="_blank"> CodeForces</a></li>
                    <li><a href="https://vjudge.net" target="_blank"> Vjudge</a></li>
                    <li><a href="http://lightoj.com/login_main.php" target="_blank"> LightOj</a></li>
                    <li><a href="https://www.devskill.com/Home" target="_blank"> DevSkill</a></li>
                </ul>
            </div>
        </div>
        <p>
            <button onclick="topFunction()" id="goToTopBtn" title="Back to top">Top</button>

        </p>
    </div>
</footer>
<!--footer start from here-->

<div class="copyright">
    <div class="container">
        <p>© {{date("Y")}} - All Rights Reserved AUST CSE Society </p>
    </div>
</div>

{{--required javascript files--}}
{{--<script src="{{asset("js/jquery-3.2.0.min.js")}}"></script>--}}

{{--<script src={{url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js")}}></script>--}}
@yield("jsFiles")