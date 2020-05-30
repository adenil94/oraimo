    <style type="text/css">
        .list{
            display: none;
        }
    </style>
    <div class="banner-wrapper has_background">
        <img src="/App/Frontend/Web/images/banner-for-all2.jpg"
             class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title container">Article</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs container">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="index-2.html"><span>Acceuil</span></a></li>
                    <li class="trail-item trail-end active"><span>Article</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<div class="main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        
                            <span  data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-grid display-mode active" id="mode-grid" value="grid">
                                <span class="button-inner " >
                                    affichage en  Grille
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
                            <span  data-toggle="tooltip" data-placement="top"
                                    class="modes-mode mode-list display-mode " id="mode-list" value="list">
                                <span class="button-inner " >
                                    affichage en List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
                    </div>
                    <form class="kobolg-ordering" method="get" style="display: none;">
                        <select title="product_cat" name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Afficher par</option>
                            <option value="popularity">Sort by popularity</option>
                        </select>
                    </form>
                    <form class="per-page-form" style="display: none;">
                        <label>
                            <select class="option-perpage">
                                <option value="12" selected="">
                                    afficher 12
                                </option>
                                <option value="5">
                                    afficher 05
                                </option>
                                <option value="10">
                                    afficher 10
                                </option>
                                <option value="12">
                                    afficher 12
                                </option>
                                <option value="15">
                                    afficher 15
                                </option>
                                <option value="20">
                                    afficher tous
                                </option>
                            </select>
                        </label>
                    </form>
                </div>
                <div class="auto-clear equal-container better-height kobolg-products">
                    <ul class="row products columns-3 allProduct">

                     
                    </ul>
                </div>
              
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    dataArticle();
</script>