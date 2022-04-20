<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
        <link rel="shortcut icon" href="pillin.ico">
    </head>

    <title>Tapentadol</title>

    <body>
        <div class="jumbotron drug-header" id="fentanyl-header">
            <h1 id="title">
                Tapentadol
            </h1>
            <br>
            <p id="paragraph">
                Tapentadol is an opioid used to manage severe pain that has not responded to non-opioid medications, and for which opioid analgesic therapy is appropriate.
            </p>
        </div>
        <div class="drug-information-container">
            <div class="drug-information">
                <div class="bn-and-csa">
                    <div class="container">
                        <div class="row">
                            <div class="col" style="width: 40%;">
                                <div class="card text-dark bg-light mb-3 card-info">
                                    <div class="card-header">
                                        Drug Scheduling <!-- csa -->
                                    </div>
                                    <div class="card-body text-danger">
                                        <h5 class="card-title">
                                            Schedule II
                                        </h5>
                                        <p class="card-text-fentanyl">Tapentadol is considered a Schedule II drug because of its high potential for abuse, physical/psychological dependency, and can be dangerous.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="width: 40%;">
                                <div class="card text-dark bg-light mb-3 card-info">
                                    <div class="card-header">
                                        Brand Names
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Nucynta</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="container" id="accordion-box">
                    <div class="accordion" id="adminstration-and-variations">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Classification
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Tapentadol is a synthetic opioid that was created in a lab to treat moderate to severe pain. 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Administration
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Tapentadol is usually administered as an oral tablet. 
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="drug-information" id="image-carousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" id="FirstCarousel" >
                            <img src="medpictures/nucynta.jpg" height="400">
                        </div>
                        <div class="carousel-item" id="image2">
                            <img src="medpictures/tapentadol.jpg" height="400">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
               </div>
            </div>
            <div class="drug-information">
            <div class="container">
                <div id="background">
                    <div class="card text-dark bg-light mb-3 card-info">
                        <div class="card-header">
                            Background <!-- csa -->
                        </div>
                        <div class="card-body">
                            Opioid analgesic for treatment of moderate to severe pain. FDA approved on Nov 20, 2008.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-dark bg-light mb-3 card-info">
                        <div class="card-header">
                            Interactions <!-- csa -->
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Cold or allergy medicines, bronchodilator asthma/COPD medication, medicines for motion sickeness, irritable bowel syndrome, or overactive bladder. </li>
                                <li class="list-group-item">Other narcotic medications - opioid pain medicine or prescription cough medicine.</li>
                                <li class="list-group-item">Sedatives like Valium - diazepam, alprazolam, lorazepam, Xanax, Klonopin, Versed, and others.</li>
                                <li class="list-group-item">Drugs that make you sleepy or slow your breathing - a sleeping pill, muscle relaxer, medicine to treat mood disorders or mental illness.</li>
                                <li class="list-group-item">Drugs that affect serotonin levels in your body - a stimulant, or medicine for depression, Parkinson's disease, migraine headaches, serious infections, or nausea and vomiting.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>