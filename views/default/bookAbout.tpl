<div class="book-data-short col-sm-12">
    <div class="row">
        <div class="col-sm-3">
            <div class="row">
                <div class="col-sm-12 book-img-wrapper">
                    <a href="#" class="thumbnail">
                        <img src="img/Rebelion_en_la_granja_es_95x140.jpg" alt="Book preview">
                    </a>
                </div>
                <div class="col-sm-12 raiting">
                    rating heare
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-4 col-md-3 book-title-header">
                    Book title
                </div>
                <div class="col-sm-8 col-md-9 book-title">
                    {$books[0].title}
                </div>
                <div class="col-sm-4 col-md-3 author-header">
                    Author
                </div>
                <div class="col-sm-8 col-md-9 author">
                    {$books[0].author}
                </div>
                <div class="col-sm-12 description-short">
                    &nbsp;&nbsp;&nbsp;&nbsp;{$books[0].description}
                </div>
            </div>
        </div>
        <div class="col-sm-12 book-statistic">
            <div class="row">
                <div class="col-sm-5 upload-date">
                    Subido: ???
                </div>
                <div class="col-sm-5 uploaded-by">
                    Subido por: {$books[0].uploader}
                </div>
                <div class="col-sm-2 btn-more">
                    <a href="index.php?controller=book&action=book&id={$books[0].id}" class="btn btn-success">
                        Mas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>