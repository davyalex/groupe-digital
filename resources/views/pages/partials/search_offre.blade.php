
    {{-- <h3 class="text-center">Effectuer une recherche</h3> --}}
  
   {{-- <div class="container">
     <div class="d-flex flex-row">
       <div class="col-md-12">
        @forelse ($category as $categories)

                                   
        <li><a href="/offre.index?category={{ $categories->id}}">{{ $categories->libelle}}</a></li>

        @empty
        PAS DE CATEGORY
        @endforelse
       </div>
     </div>
   </div> --}}
   <hr>
      <form action="{{ route('offre.filtre') }}" method="get" class="form-horizontal">
        <div class="d-flex flex-row"  >
           
            <div class="col-md-5">
              <div class="form-group"style="margin:1px;">
                <label for="my-input">Type offre</label>
              <select name="search" id="selectType" class="form-control">
                <option value="">Selectionner</option>
                @foreach ($type as $types)
                <option value="{{ $types->libelle }}">{{ $types->libelle }}</option>
              @endforeach                     
              </select>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group"style="margin:1px;">
                <label for="my-input">Specialité</label>
              <select name="query" id="selectSpecialite" class="form-control">
                <option value="">Selectionner</option>
                @foreach ($category as $categories)
                  <option value="{{ $categories->libelle }}">{{ $categories->libelle }}</option>
                @endforeach                     
              </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class=" form-group"style="margin:1px;">   
                <div class="col-md-4 col-sm-12 col-xs-12"style="margin-top:20px;">
                  <button type="submit"class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Rechercher</button>
                   </div>                      
              </div>
            </div>
        </div>
       @if (request()->input('query'))
       <h4 class=" text-center text-success"><b>{{ $offre->count() }} {{ request()->input('query') }}</b> trouvée(s)</h4>
       @endif
      </form>
      <script>
     
            $('#selectSpecialite').select2({
              width:'100%',
              placeholder:"seclectionner une specialité",
              allowClear:true
            });

            $('#selectType').select2({
              width:'100%',
              placeholder:"seclectionner un type",
              allowClear:true
            });
      
    
    </script>








