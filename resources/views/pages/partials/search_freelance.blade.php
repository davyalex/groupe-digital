<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
           
            <h2>Recherche par mot clé</h2>
            <form action="{{ route('freelance.search') }}" method="get">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" name="q" placeholder="Entrez ce que vous recherchez......" value="{{ request()->input('q') }}"/>
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </form>
            @if (count($freelance)>0)
          
            <h4 class=" text-center text-success"><b>{{ $freelance->count() }}</b> Freelance(s) Disponible(s)</h4>

           
            @else
            <h3 class="text-center text-danger">Pas de freelance disponible pour votre recherche....recherchez autres freelances</h3>
            @endif
        </div>
    </div>
</div>