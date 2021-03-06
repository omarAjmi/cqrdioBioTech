@extends('layouts.admin_layout')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                    <div class="col-md-12 ">
                        <!-- DATA TABLE -->
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <span class="badge badge-pill badge-primary">Succès</span>
                                {{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                         <a class="btn btn-primary pull-right" href="{{ route('admin.newEvent') }}">Creer un nouvel évènement</a>
                        <h3 class="title-5 m-b-35">Évènements</h3>
                       
                        @if ($events->isEmpty())
                            <div class="alert alert-info"> <strong>Info!</strong>  Pas encore des évènnements</div>
                        @else

                            <div class="table-responsive table-responsive-data2 ">
                                
                                <table class="table table-data2" id="table_id">
                                    <div class="card">
                                    <thead class="card-header">
                                           
                                            <th>abbreviation</th>
                                            <th>titre</th>
                                            <th>programme</th>
                                            <th>début</th>
                                            <th>fin</th>
                                            <th>etat</th>
                                            <th>options</th>
                                            
                                    </thead>
                                    <tbody class="card-body">                                      
                                        @foreach ($events as $event)
                                            <tr class="tr-shadow">
                                               
                                                <td>{{ $event->abbreviation }}</td>
                                                <td>
                                                    <span class="block-email">{{ $event->title }}</span>
                                                </td>
                                                <td class="desc"><a href="{{ route('downloadFileEvent', [
                                                    'id'=>$event->id,
                                                    'filename'=>$event->getProgramFileName()
                                                    ]) }}" target="_blank">{{ $event->getProgramFileName() }}</a>
                                                        
                                                    </td>
                                                <td>{{ $event->start_date->format('l j F Y H:i:s')}}</td>
                                                <td>{{ $event->end_date->format('l j F Y H:i:s') }}</td>
                                                
                                                @if ($event->start_date < now())
                                                    <td>
                                                        <span class="status--denied">dépasser</span>
                                                    </td>
                                                @else
                                                    <td>
                                                        <span class="status--process">en attente</span>
                                                    </td>
                                                @endif
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <a href="{{ route('admin.previewEvent', [$event->id]) }}">
                                                            <button class="item"  data-original-title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>&nbsp;
                                                        <form onsubmit="return confirmation(this)" action="{{ route('admin.deleteEvent', [$event->id]) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="item"  data-original-title="Delete">
                                                                <i class="zmdi zmdi-delete" style=""></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                           </tr>
                                            <script !src="">
                                                function confirmation(form) {
                                                    if(confirm('voulez-vous vraiment supprimer l\'événement {!! $event->abbreviation !!}')) {
                                                        form.submit();
                                                    } else {
                                                        return false;
                                                    }
                                                }
                                            </script>
                                        @endforeach
                                    </tbody>
                                     </div>
                                </table>
                               
                            </div>
                        @endif
                    </div>
               
   
            </div>
        </div>
    </div> 

@endsection
