<?php

class __Mustache_1ce7302d88778dc1a91887f3cc83c1d8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hascustomlogin' section
        $value = $context->find('hascustomlogin');
        $buffer .= $this->section63655cf9d11c882fc56d4892b3a9114a($context, $indent, $value);

        return $buffer;
    }

    private function section296d5d9881882c6d8be7224040248e55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="col-md-3">
        <div class="card loginicon">
            <div class="loginnavicon">
                <i class="fa fa-4x fa-{{{icon}}}"></i>
            </div>
            <div class="loginnavtext">
                <h3>{{{title}}}</h3> {{{text}}}
            </div>
        </div>
    </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '    <div class="col-md-3">
';
                $buffer .= $indent . '        <div class="card loginicon">
';
                $buffer .= $indent . '            <div class="loginnavicon">
';
                $buffer .= $indent . '                <i class="fa fa-4x fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="loginnavtext">
';
                $buffer .= $indent . '                <h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3> ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31d63bc5d543875473525fa112d15b58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#hasicon}}
    <div class="col-md-3">
        <div class="card loginicon">
            <div class="loginnavicon">
                <i class="fa fa-4x fa-{{{icon}}}"></i>
            </div>
            <div class="loginnavtext">
                <h3>{{{title}}}</h3> {{{text}}}
            </div>
        </div>
    </div>
    {{/hasicon}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                // 'hasicon' section
                $value = $context->find('hasicon');
                $buffer .= $this->section296d5d9881882c6d8be7224040248e55($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe5490f612590007fd67f7ac50e78682(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row loginicons">
    {{#fpiconnav}} {{#hasicon}}
    <div class="col-md-3">
        <div class="card loginicon">
            <div class="loginnavicon">
                <i class="fa fa-4x fa-{{{icon}}}"></i>
            </div>
            <div class="loginnavtext">
                <h3>{{{title}}}</h3> {{{text}}}
            </div>
        </div>
    </div>
    {{/hasicon}} {{/fpiconnav}}
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="row loginicons">
';
                $buffer .= $indent . '    ';
                // 'fpiconnav' section
                $value = $context->find('fpiconnav');
                $buffer .= $this->section31d63bc5d543875473525fa112d15b58($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96f4b6871ec816d464113abcf16a7f7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row fpcustomtext">
    <div class="col-md-8">
        <div class="featuretext">
            {{{feature1text}}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="loginfeaturedimage">
            <img src="{{{ feature1image }}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="row fpcustomtext">
';
                $buffer .= $indent . '    <div class="col-md-8">
';
                $buffer .= $indent . '        <div class="featuretext">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('feature1text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="col-md-4">
';
                $buffer .= $indent . '        <div class="loginfeaturedimage">
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('feature1image'), $context);
                $buffer .= $value;
                $buffer .= '" class="img-fluid" alt="Responsive image">
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fa5a388a32f9835e31de3a5e06f8b5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row fpcustomtext">
    <div class="col-md-8">
        <div class="featuretext">
            {{{feature2text}}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="loginfeaturedimage">
            <img src="{{{ feature2image }}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="row fpcustomtext">
';
                $buffer .= $indent . '    <div class="col-md-8">
';
                $buffer .= $indent . '        <div class="featuretext">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('feature2text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="col-md-4">
';
                $buffer .= $indent . '        <div class="loginfeaturedimage">
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('feature2image'), $context);
                $buffer .= $value;
                $buffer .= '" class="img-fluid" alt="Responsive image">
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53d2d80c3a186d681744f6903dd5a1e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row fpcustomtext">
    <div class="col-md-8">
        <div class="featuretext">
            {{{feature3text}}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="loginfeaturedimage">
            <img src="{{{ feature3image }}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="row fpcustomtext">
';
                $buffer .= $indent . '    <div class="col-md-8">
';
                $buffer .= $indent . '        <div class="featuretext">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('feature3text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="col-md-4">
';
                $buffer .= $indent . '        <div class="loginfeaturedimage">
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('feature3image'), $context);
                $buffer .= $value;
                $buffer .= '" class="img-fluid" alt="Responsive image">
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63655cf9d11c882fc56d4892b3a9114a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 

{{#hasfpiconnav}}
<div class="row loginicons">
    {{#fpiconnav}} {{#hasicon}}
    <div class="col-md-3">
        <div class="card loginicon">
            <div class="loginnavicon">
                <i class="fa fa-4x fa-{{{icon}}}"></i>
            </div>
            <div class="loginnavtext">
                <h3>{{{title}}}</h3> {{{text}}}
            </div>
        </div>
    </div>
    {{/hasicon}} {{/fpiconnav}}
</div>
{{/hasfpiconnav}} 

{{#hasfeature1}}
<div class="row fpcustomtext">
    <div class="col-md-8">
        <div class="featuretext">
            {{{feature1text}}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="loginfeaturedimage">
            <img src="{{{ feature1image }}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
{{/hasfeature1}} 
{{#hasfeature2}}
<div class="row fpcustomtext">
    <div class="col-md-8">
        <div class="featuretext">
            {{{feature2text}}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="loginfeaturedimage">
            <img src="{{{ feature2image }}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
{{/hasfeature2}} 
{{#hasfeature3}}
<div class="row fpcustomtext">
    <div class="col-md-8">
        <div class="featuretext">
            {{{feature3text}}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="loginfeaturedimage">
            <img src="{{{ feature3image }}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
{{/hasfeature3}} 

';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                // 'hasfpiconnav' section
                $value = $context->find('hasfpiconnav');
                $buffer .= $this->sectionBe5490f612590007fd67f7ac50e78682($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasfeature1' section
                $value = $context->find('hasfeature1');
                $buffer .= $this->section96f4b6871ec816d464113abcf16a7f7c($context, $indent, $value);
                // 'hasfeature2' section
                $value = $context->find('hasfeature2');
                $buffer .= $this->section5fa5a388a32f9835e31de3a5e06f8b5d($context, $indent, $value);
                // 'hasfeature3' section
                $value = $context->find('hasfeature3');
                $buffer .= $this->section53d2d80c3a186d681744f6903dd5a1e4($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
