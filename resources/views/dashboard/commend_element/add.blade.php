@extends('includes.dash_layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">add commend_elements</h4>
                    <p class="card-category">Complete your commend_elements</p>
                </div>
                <div class="card-body">
                    <form action="{{ route('commends_elements.store')}}" method="POST">
                        @csrf
                        <div class="row">

                            <input type="hidden" name="commend_id" value="{{$commend->id}}">


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">articles</label>

                                     <select required class="form-control" name="article_id" >
                                       @foreach ($articles as $item)
                                            <option  value="{{$item->id}}">{{$item->name}}</option>
                                       @endforeach
                                     </select>
                                     @error('article_id')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="prix">prix</label>
                                    <input type="number" name="prix" class="form-control">
                                    @error('prix')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="quantitie">quantitie</label>
                                    <input type="text" name="quantitie" class="form-control">
                                    @error('quantitie')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">add ventes_elements</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
