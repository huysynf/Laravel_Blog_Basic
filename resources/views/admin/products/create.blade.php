@extends('admin.layouts.app')
@section('title', 'Create Product')

@section('content')
    <div class="row min-vh-80">
        <div class="col-lg-8 col-md-10 col-12 m-auto">
            <h3 class="mt-3 mb-0 text-center">Add new Product</h3>
            <p class="lead font-weight-normal opacity-8 mb-7 text-center">This information will let us know more about you.</p>
            <div class="card">
                <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="multisteps-form__progress">
                            <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                <span>1. Product Info</span>
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Media">2. Media</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Socials">3. Socials</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Pricing">4. Pricing</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="multisteps-form__form" style="height: 391px;">

                        <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Product Information</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <div class="input-group input-group-dynamic">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <div class="input-group input-group-dynamic">
                                            <label for="exampleFormControlInput1" class="form-label">Weight</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mt-4">Description</label>
                                        <p class="form-text text-muted text-xs ms-1 d-inline">
                                            (optional)
                                        </p>
                                        <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option value="3"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button><button type="button" class="ql-link"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button></span><span class="ql-formats"><button type="button" class="ql-list" value="ordered"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button></span><span class="ql-formats"><button type="button" class="ql-clean"><svg class="" viewBox="0 0 18 18"> <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line> <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line> <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line> <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect> </svg></button></span></div><div id="edit-deschiption" class="h-50 ql-container ql-snow"><div class="ql-editor" data-gramm="false" contenteditable="true"><p>Some initial <strong>bold</strong> text</p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                                    </div>
                                    <div class="col-sm-6 mt-sm-3 mt-5">
                                        <label class="form-control ms-0">Category</label>
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" name="choices-category" id="choices-category" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1">Clothing</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">Clothing</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--choices-category-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Clothing</div><div id="choices--choices-category-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">Electronics</div><div id="choices--choices-category-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="">Furniture</div><div id="choices--choices-category-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 5" data-select-text="Press to select" data-choice-selectable="">Others</div><div id="choices--choices-category-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Real Estate</div></div></div></div>
                                        <label class="form-control ms-0">Sizes</label>
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" name="choices-sizes" id="choices-sizes" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1">Medium</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">Medium</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--choices-sizes-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Extra Large</div><div id="choices--choices-sizes-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 5" data-select-text="Press to select" data-choice-selectable="">Extra Small</div><div id="choices--choices-sizes-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">Large</div><div id="choices--choices-sizes-item-choice-4" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="">Medium</div><div id="choices--choices-sizes-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Small</div></div></div></div>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>

                        <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Media</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label class="form-control mb-0">Product images</label>
                                        <div action="/file-upload" class="form-control border dropzone dz-clickable" id="productImg"><div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></div>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>

                        <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Socials</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="input-group input-group-dynamic">
                                            <label class="form-label">Shoppify Handle</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="input-group input-group-dynamic">
                                            <label class="form-label">Facebook Account</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="input-group input-group-dynamic">
                                            <label class="form-label">Instagram Account</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="multisteps-form__panel pt-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Pricing</h5>
                            <div class="multisteps-form__content mt-3">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="input-group input-group-dynamic">
                                            <label class="form-label">Price</label>
                                            <input type="email" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" name="choices-sizes" id="choices-currency" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1">USD</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">USD</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--choices-currency-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 6" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">BTC</div><div id="choices--choices-currency-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="">CNY</div><div id="choices--choices-currency-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">EUR</div><div id="choices--choices-currency-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">GBP</div><div id="choices--choices-currency-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Choice 5" data-select-text="Press to select" data-choice-selectable="">INR</div><div id="choices--choices-currency-item-choice-6" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="">USD</div></div></div></div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group input-group-dynamic">
                                            <label class="form-label">SKU</label>
                                            <input class="multisteps-form__input form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="mt-4 form-label">Tags</label>
                                        <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" name="choices-tags" id="choices-tags" multiple="" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1">In Stock</option><option value="Two">Out of Stock</option></select><div class="choices__list choices__list--multiple"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true" data-deletable="">In Stock<button type="button" class="choices__button" aria-label="Remove item: 'Choice 1'" data-button="">Remove item</button></div><div class="choices__item choices__item--selectable" data-item="" data-id="2" data-value="Two" data-custom-properties="null" aria-selected="true" data-deletable="">Out of Stock<button type="button" class="choices__button" aria-label="Remove item: 'Two'" data-button="">Remove item</button></div></div><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false"></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" aria-multiselectable="true" role="listbox"><div id="choices--choices-tags-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Black Friday</div><div id="choices--choices-tags-item-choice-5" class="choices__item choices__item--choice choices__item--disabled" role="option" data-choice="" data-id="5" data-value="One" data-select-text="Press to select" data-choice-disabled="" aria-disabled="true">Expired</div><div id="choices--choices-tags-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Out of Stock</div><div id="choices--choices-tags-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">Sale</div></div></div></div>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-0 mt-md-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
