<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Dentist</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>BotMan Studio</title>
    
        <!-- Fonts -->
       >
    
        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/treatment.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/logo-header2.png') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
       
    </head>
    <body>
       
    @extends("navbarextend");

    @php
      $languag = session()->get('lang');
    if($languag =='en'){
        echo "<style>
            body{
                         direction: ltr;
                         
                        }
                .card-body{
                         direction: ltr;
                         text-align: left;
                        }
        
        </style>";
        }elseif($languag == 'ar'){
            echo "<style>
                body{
                         direction: rtl;
                         
                        }
                .card-body{
                    direction: rtl;
                         text-align: right;
                        }
        </style>";
        }
    @endphp
           
    <div class="row">
        

    </div>

                    <div class="card-deck ">
                      
                       <div class="card col-md-4">

                            <div class="card-body">
                                <h3 class="card-title">{{ trans('main.treatment-title-Penicillin') }}</h3>
                                <p class="card-text">{{ trans('main.treatment-nam-Penicillin') }}</p>
                                <h4 class="card-text">{{ trans('main.treatment-ins-Penicillin') }} </h4>
                                <h5 class="card-text">{{ trans('main.How to take') }} </h5>
                                <p class="card-text">{{ trans('main.How to take-Penicillin') }} </p>
                                <p class="card-text">{{ trans('main.For adults') }} </p>
                                <p class="card-text">{{ trans('main.Children-Penicillin') }} </p>
                                <h6 class="card-text">{{ trans('main.warning-Penicillin') }} </h6>
                                <p class="card-text">{{ trans('main.During pregnancy-penicillin') }} </p>
                                <h6 class="card-text">{{ trans('main.Children and infants') }} </h6>
                                <p class="card-text">{{ trans('main.Children and infants-penicillin') }} </p>
                                <h6 class="card-text">{{ trans('main.Elderly') }} </h6>
                                <p class="card-text">{{ trans('main.Elderly-penicillin') }} </p>
                                
                                
                            </div>
                            <div class="card-footer">
                                
                            </div>

                        </div>
                            
                          
                          
                        <div class="card col-md-4">

                            <div class="card-body">
                                <h3 class="card-title">{{ trans('main.treatment-title-Chlorhexidine') }}</h3>
                                <p class="card-text">{{ trans('main.treatment-nam-Chlorhexidine') }}</p>
                                <h4 class="card-text">{{ trans('main.treatment-ins-Chlorhexidine') }} </h4>
                                <h5 class="card-text">{{ trans('main.How to take') }} </h5>
                                <p class="card-text">{{ trans('main.How to take-Chlorhexidine') }} </p>
                                <h6 class="card-text">{{ trans('main.warning-Chlorhexidine') }} </h6>
                                <p class="card-text">{{ trans('main.During pregnancy-Chlorhexidine') }} </p>
                                <h6 class="card-text">{{ trans('main.Children and infants') }} </h6>
                                <p class="card-text">{{ trans('main.Children and infants-Chlorhexidine') }} </p>
                                <h6 class="card-text">{{ trans('main.Elderly') }} </h6>
                                <p class="card-text">{{ trans('main.Elderly-Chlorhexidine') }} </p>
                                
                                
                            </div>
                            <div class="card-footer">
                                
                            </div>

                        </div>

                        <div class="card col-md-4">

                            <div class="card-body">
                                <h3 class="card-title">{{ trans('main.treatment-title-Paracetamol') }}</h3>
                                <p class="card-text">{{ trans('main.treatment-nam-Paracetamol') }}</p>
                                <h4 class="card-text">{{ trans('main.treatment-ins-Paracetamol') }} </h4>
                                <h5 class="card-text">{{ trans('main.How to take') }} </h5>
                                <p class="card-text">{{ trans('main.How to take-Paracetamol') }} </p>
                                <h6 class="card-text">{{ trans('main.warning-Paracetamol') }} </h6>
                                <p class="card-text">{{ trans('main.During pregnancy-Paracetamol') }} </p>
                                <h6 class="card-text">{{ trans('main.Children and infants') }} </h6>
                                <p class="card-text">{{ trans('main.Children and infants-Paracetamol') }} </p>
                                <h6 class="card-text">{{ trans('main.Elderly') }} </h6>
                                <p class="card-text">{{ trans('main.Elderly-Paracetamol') }} </p>
                                
                                
                            </div>
                            <div class="card-footer">
                                
                            </div>

                        </div>

                       


                </div>


    </div>


</div>


<!--------------------------twow rwo-->
<div class="row">
        

</div>

                <div class="card-deck ">
                  
                   

                    <div class="card col-md-4">

                        <div class="card-body">
                            <h3 class="card-title">{{ trans('main.treatment-title-Nimesulide') }}</h3>
                            <p class="card-text">{{ trans('main.treatment-nam-Nimesulide') }}</p>
                            <h4 class="card-text">{{ trans('main.treatment-ins-Nimesulide') }} </h4>
                            <h5 class="card-text">{{ trans('main.How to take') }} </h5>
                            <p class="card-text">{{ trans('main.How to take-Nimesulide') }} </p>
                            <h6 class="card-text">{{ trans('main.warning-Nimesulide') }} </h6>
                            <p class="card-text">{{ trans('main.During pregnancy-Nimesulide') }} </p>
                            <h6 class="card-text">{{ trans('main.Children and infants') }} </h6>
                            <p class="card-text">{{ trans('main.Children and infants-Nimesulide') }} </p>
                            <h6 class="card-text">{{ trans('main.Elderly') }} </h6>
                            <p class="card-text">{{ trans('main.Elderly-Nimesulide') }} </p>
                            
                            
                        </div>
                        <div class="card-footer">
                            
                        </div>

                    </div>

                    
                    <div class="card col-md-4">

                        <div class="card-body">
                            <h3 class="card-title">{{ trans('main.treatment-title-Propoxyphene') }}</h3>
                            <p class="card-text">{{ trans('main.treatment-nam-Propoxyphene') }}</p>
                            <h4 class="card-text">{{ trans('main.treatment-ins-Propoxyphene') }} </h4>
                            <h5 class="card-text">{{ trans('main.How to take') }} </h5>
                            <p class="card-text">{{ trans('main.How to take-Propoxyphene') }} </p>
                            <h6 class="card-text">{{ trans('main.warning-Propoxyphene') }} </h6>
                            <p class="card-text">{{ trans('main.During pregnancy-Propoxyphene') }} </p>
                            <h6 class="card-text">{{ trans('main.Children and infants') }} </h6>
                            <p class="card-text">{{ trans('main.Children and infants-Propoxyphene') }} </p>
                            <h6 class="card-text">{{ trans('main.Elderly') }} </h6>
                            <p class="card-text">{{ trans('main.Elderly-Propoxyphene') }} </p>
                            
                            
                        </div>
                        <div class="card-footer">
                            
                        </div>

                    </div>

            </div>


</div>


</div>
               
        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <script src="{{ asset('js/home.js') }}"></script>
    </body>
   
</html>
