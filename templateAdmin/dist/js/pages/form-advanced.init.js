!function(e){"use strict";var a=function(){};a.prototype.initSwitchery=function(){e('[data-plugin="switchery"]').each(function(a,t){new Switchery(e(this)[0],e(this).data())})},a.prototype.initMaxLength=function(){e("input#defaultconfig").maxlength({warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),e("input#thresholdconfig").maxlength({threshold:20,warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),e("input#alloptions").maxlength({alwaysShow:!0,separator:" out of ",preText:"You typed ",postText:" chars available.",validate:!0,warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),e("textarea#textarea").maxlength({alwaysShow:!0,warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),e("input#placement").maxlength({alwaysShow:!0,placement:"top-left",warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"})},a.prototype.init=function(){this.initSwitchery(),this.initMaxLength()},e.Components=new a,e.Components.Constructor=a}(window.jQuery),function(e){"use strict";e.Components.init()}(window.jQuery);