<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4edb17f88f9164e5dd4faaf41018964d
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lernkartei\\' => 11,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lernkartei\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/lernkartei',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Twig\\Cache\\CacheInterface' => __DIR__ . '/..' . '/twig/twig/src/Cache/CacheInterface.php',
        'Twig\\Cache\\FilesystemCache' => __DIR__ . '/..' . '/twig/twig/src/Cache/FilesystemCache.php',
        'Twig\\Cache\\NullCache' => __DIR__ . '/..' . '/twig/twig/src/Cache/NullCache.php',
        'Twig\\Compiler' => __DIR__ . '/..' . '/twig/twig/src/Compiler.php',
        'Twig\\Environment' => __DIR__ . '/..' . '/twig/twig/src/Environment.php',
        'Twig\\Error\\Error' => __DIR__ . '/..' . '/twig/twig/src/Error/Error.php',
        'Twig\\Error\\LoaderError' => __DIR__ . '/..' . '/twig/twig/src/Error/LoaderError.php',
        'Twig\\Error\\RuntimeError' => __DIR__ . '/..' . '/twig/twig/src/Error/RuntimeError.php',
        'Twig\\Error\\SyntaxError' => __DIR__ . '/..' . '/twig/twig/src/Error/SyntaxError.php',
        'Twig\\ExpressionParser' => __DIR__ . '/..' . '/twig/twig/src/ExpressionParser.php',
        'Twig\\ExtensionSet' => __DIR__ . '/..' . '/twig/twig/src/ExtensionSet.php',
        'Twig\\Extension\\AbstractExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/AbstractExtension.php',
        'Twig\\Extension\\CoreExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/CoreExtension.php',
        'Twig\\Extension\\DebugExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/DebugExtension.php',
        'Twig\\Extension\\EscaperExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/EscaperExtension.php',
        'Twig\\Extension\\ExtensionInterface' => __DIR__ . '/..' . '/twig/twig/src/Extension/ExtensionInterface.php',
        'Twig\\Extension\\GlobalsInterface' => __DIR__ . '/..' . '/twig/twig/src/Extension/GlobalsInterface.php',
        'Twig\\Extension\\InitRuntimeInterface' => __DIR__ . '/..' . '/twig/twig/src/Extension/InitRuntimeInterface.php',
        'Twig\\Extension\\OptimizerExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/OptimizerExtension.php',
        'Twig\\Extension\\ProfilerExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/ProfilerExtension.php',
        'Twig\\Extension\\RuntimeExtensionInterface' => __DIR__ . '/..' . '/twig/twig/src/Extension/RuntimeExtensionInterface.php',
        'Twig\\Extension\\SandboxExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/SandboxExtension.php',
        'Twig\\Extension\\StagingExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/StagingExtension.php',
        'Twig\\Extension\\StringLoaderExtension' => __DIR__ . '/..' . '/twig/twig/src/Extension/StringLoaderExtension.php',
        'Twig\\FileExtensionEscapingStrategy' => __DIR__ . '/..' . '/twig/twig/src/FileExtensionEscapingStrategy.php',
        'Twig\\Lexer' => __DIR__ . '/..' . '/twig/twig/src/Lexer.php',
        'Twig\\Loader\\ArrayLoader' => __DIR__ . '/..' . '/twig/twig/src/Loader/ArrayLoader.php',
        'Twig\\Loader\\ChainLoader' => __DIR__ . '/..' . '/twig/twig/src/Loader/ChainLoader.php',
        'Twig\\Loader\\ExistsLoaderInterface' => __DIR__ . '/..' . '/twig/twig/src/Loader/ExistsLoaderInterface.php',
        'Twig\\Loader\\FilesystemLoader' => __DIR__ . '/..' . '/twig/twig/src/Loader/FilesystemLoader.php',
        'Twig\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/twig/twig/src/Loader/LoaderInterface.php',
        'Twig\\Loader\\SourceContextLoaderInterface' => __DIR__ . '/..' . '/twig/twig/src/Loader/SourceContextLoaderInterface.php',
        'Twig\\Markup' => __DIR__ . '/..' . '/twig/twig/src/Markup.php',
        'Twig\\NodeTraverser' => __DIR__ . '/..' . '/twig/twig/src/NodeTraverser.php',
        'Twig\\NodeVisitor\\AbstractNodeVisitor' => __DIR__ . '/..' . '/twig/twig/src/NodeVisitor/AbstractNodeVisitor.php',
        'Twig\\NodeVisitor\\EscaperNodeVisitor' => __DIR__ . '/..' . '/twig/twig/src/NodeVisitor/EscaperNodeVisitor.php',
        'Twig\\NodeVisitor\\NodeVisitorInterface' => __DIR__ . '/..' . '/twig/twig/src/NodeVisitor/NodeVisitorInterface.php',
        'Twig\\NodeVisitor\\OptimizerNodeVisitor' => __DIR__ . '/..' . '/twig/twig/src/NodeVisitor/OptimizerNodeVisitor.php',
        'Twig\\NodeVisitor\\SafeAnalysisNodeVisitor' => __DIR__ . '/..' . '/twig/twig/src/NodeVisitor/SafeAnalysisNodeVisitor.php',
        'Twig\\NodeVisitor\\SandboxNodeVisitor' => __DIR__ . '/..' . '/twig/twig/src/NodeVisitor/SandboxNodeVisitor.php',
        'Twig\\Node\\AutoEscapeNode' => __DIR__ . '/..' . '/twig/twig/src/Node/AutoEscapeNode.php',
        'Twig\\Node\\BlockNode' => __DIR__ . '/..' . '/twig/twig/src/Node/BlockNode.php',
        'Twig\\Node\\BlockReferenceNode' => __DIR__ . '/..' . '/twig/twig/src/Node/BlockReferenceNode.php',
        'Twig\\Node\\BodyNode' => __DIR__ . '/..' . '/twig/twig/src/Node/BodyNode.php',
        'Twig\\Node\\CheckSecurityNode' => __DIR__ . '/..' . '/twig/twig/src/Node/CheckSecurityNode.php',
        'Twig\\Node\\DoNode' => __DIR__ . '/..' . '/twig/twig/src/Node/DoNode.php',
        'Twig\\Node\\EmbedNode' => __DIR__ . '/..' . '/twig/twig/src/Node/EmbedNode.php',
        'Twig\\Node\\Expression\\AbstractExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/AbstractExpression.php',
        'Twig\\Node\\Expression\\ArrayExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/ArrayExpression.php',
        'Twig\\Node\\Expression\\AssignNameExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/AssignNameExpression.php',
        'Twig\\Node\\Expression\\Binary\\AbstractBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/AbstractBinary.php',
        'Twig\\Node\\Expression\\Binary\\AddBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/AddBinary.php',
        'Twig\\Node\\Expression\\Binary\\AndBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/AndBinary.php',
        'Twig\\Node\\Expression\\Binary\\BitwiseAndBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/BitwiseAndBinary.php',
        'Twig\\Node\\Expression\\Binary\\BitwiseOrBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/BitwiseOrBinary.php',
        'Twig\\Node\\Expression\\Binary\\BitwiseXorBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/BitwiseXorBinary.php',
        'Twig\\Node\\Expression\\Binary\\ConcatBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/ConcatBinary.php',
        'Twig\\Node\\Expression\\Binary\\DivBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/DivBinary.php',
        'Twig\\Node\\Expression\\Binary\\EndsWithBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/EndsWithBinary.php',
        'Twig\\Node\\Expression\\Binary\\EqualBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/EqualBinary.php',
        'Twig\\Node\\Expression\\Binary\\FloorDivBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/FloorDivBinary.php',
        'Twig\\Node\\Expression\\Binary\\GreaterBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/GreaterBinary.php',
        'Twig\\Node\\Expression\\Binary\\GreaterEqualBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/GreaterEqualBinary.php',
        'Twig\\Node\\Expression\\Binary\\InBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/InBinary.php',
        'Twig\\Node\\Expression\\Binary\\LessBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/LessBinary.php',
        'Twig\\Node\\Expression\\Binary\\LessEqualBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/LessEqualBinary.php',
        'Twig\\Node\\Expression\\Binary\\MatchesBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/MatchesBinary.php',
        'Twig\\Node\\Expression\\Binary\\ModBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/ModBinary.php',
        'Twig\\Node\\Expression\\Binary\\MulBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/MulBinary.php',
        'Twig\\Node\\Expression\\Binary\\NotEqualBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/NotEqualBinary.php',
        'Twig\\Node\\Expression\\Binary\\NotInBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/NotInBinary.php',
        'Twig\\Node\\Expression\\Binary\\OrBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/OrBinary.php',
        'Twig\\Node\\Expression\\Binary\\PowerBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/PowerBinary.php',
        'Twig\\Node\\Expression\\Binary\\RangeBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/RangeBinary.php',
        'Twig\\Node\\Expression\\Binary\\StartsWithBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/StartsWithBinary.php',
        'Twig\\Node\\Expression\\Binary\\SubBinary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Binary/SubBinary.php',
        'Twig\\Node\\Expression\\BlockReferenceExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/BlockReferenceExpression.php',
        'Twig\\Node\\Expression\\CallExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/CallExpression.php',
        'Twig\\Node\\Expression\\ConditionalExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/ConditionalExpression.php',
        'Twig\\Node\\Expression\\ConstantExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/ConstantExpression.php',
        'Twig\\Node\\Expression\\FilterExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/FilterExpression.php',
        'Twig\\Node\\Expression\\Filter\\DefaultFilter' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Filter/DefaultFilter.php',
        'Twig\\Node\\Expression\\FunctionExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/FunctionExpression.php',
        'Twig\\Node\\Expression\\GetAttrExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/GetAttrExpression.php',
        'Twig\\Node\\Expression\\MethodCallExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/MethodCallExpression.php',
        'Twig\\Node\\Expression\\NameExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/NameExpression.php',
        'Twig\\Node\\Expression\\NullCoalesceExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/NullCoalesceExpression.php',
        'Twig\\Node\\Expression\\ParentExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/ParentExpression.php',
        'Twig\\Node\\Expression\\TempNameExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/TempNameExpression.php',
        'Twig\\Node\\Expression\\TestExpression' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/TestExpression.php',
        'Twig\\Node\\Expression\\Test\\ConstantTest' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Test/ConstantTest.php',
        'Twig\\Node\\Expression\\Test\\DefinedTest' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Test/DefinedTest.php',
        'Twig\\Node\\Expression\\Test\\DivisiblebyTest' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Test/DivisiblebyTest.php',
        'Twig\\Node\\Expression\\Test\\EvenTest' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Test/EvenTest.php',
        'Twig\\Node\\Expression\\Test\\NullTest' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Test/NullTest.php',
        'Twig\\Node\\Expression\\Test\\OddTest' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Test/OddTest.php',
        'Twig\\Node\\Expression\\Test\\SameasTest' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Test/SameasTest.php',
        'Twig\\Node\\Expression\\Unary\\AbstractUnary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Unary/AbstractUnary.php',
        'Twig\\Node\\Expression\\Unary\\NegUnary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Unary/NegUnary.php',
        'Twig\\Node\\Expression\\Unary\\NotUnary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Unary/NotUnary.php',
        'Twig\\Node\\Expression\\Unary\\PosUnary' => __DIR__ . '/..' . '/twig/twig/src/Node/Expression/Unary/PosUnary.php',
        'Twig\\Node\\FlushNode' => __DIR__ . '/..' . '/twig/twig/src/Node/FlushNode.php',
        'Twig\\Node\\ForLoopNode' => __DIR__ . '/..' . '/twig/twig/src/Node/ForLoopNode.php',
        'Twig\\Node\\ForNode' => __DIR__ . '/..' . '/twig/twig/src/Node/ForNode.php',
        'Twig\\Node\\IfNode' => __DIR__ . '/..' . '/twig/twig/src/Node/IfNode.php',
        'Twig\\Node\\ImportNode' => __DIR__ . '/..' . '/twig/twig/src/Node/ImportNode.php',
        'Twig\\Node\\IncludeNode' => __DIR__ . '/..' . '/twig/twig/src/Node/IncludeNode.php',
        'Twig\\Node\\MacroNode' => __DIR__ . '/..' . '/twig/twig/src/Node/MacroNode.php',
        'Twig\\Node\\ModuleNode' => __DIR__ . '/..' . '/twig/twig/src/Node/ModuleNode.php',
        'Twig\\Node\\Node' => __DIR__ . '/..' . '/twig/twig/src/Node/Node.php',
        'Twig\\Node\\NodeCaptureInterface' => __DIR__ . '/..' . '/twig/twig/src/Node/NodeCaptureInterface.php',
        'Twig\\Node\\NodeOutputInterface' => __DIR__ . '/..' . '/twig/twig/src/Node/NodeOutputInterface.php',
        'Twig\\Node\\PrintNode' => __DIR__ . '/..' . '/twig/twig/src/Node/PrintNode.php',
        'Twig\\Node\\SandboxNode' => __DIR__ . '/..' . '/twig/twig/src/Node/SandboxNode.php',
        'Twig\\Node\\SandboxedPrintNode' => __DIR__ . '/..' . '/twig/twig/src/Node/SandboxedPrintNode.php',
        'Twig\\Node\\SetNode' => __DIR__ . '/..' . '/twig/twig/src/Node/SetNode.php',
        'Twig\\Node\\SpacelessNode' => __DIR__ . '/..' . '/twig/twig/src/Node/SpacelessNode.php',
        'Twig\\Node\\TextNode' => __DIR__ . '/..' . '/twig/twig/src/Node/TextNode.php',
        'Twig\\Node\\WithNode' => __DIR__ . '/..' . '/twig/twig/src/Node/WithNode.php',
        'Twig\\Parser' => __DIR__ . '/..' . '/twig/twig/src/Parser.php',
        'Twig\\Profiler\\Dumper\\BaseDumper' => __DIR__ . '/..' . '/twig/twig/src/Profiler/Dumper/BaseDumper.php',
        'Twig\\Profiler\\Dumper\\BlackfireDumper' => __DIR__ . '/..' . '/twig/twig/src/Profiler/Dumper/BlackfireDumper.php',
        'Twig\\Profiler\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/twig/twig/src/Profiler/Dumper/HtmlDumper.php',
        'Twig\\Profiler\\Dumper\\TextDumper' => __DIR__ . '/..' . '/twig/twig/src/Profiler/Dumper/TextDumper.php',
        'Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor' => __DIR__ . '/..' . '/twig/twig/src/Profiler/NodeVisitor/ProfilerNodeVisitor.php',
        'Twig\\Profiler\\Node\\EnterProfileNode' => __DIR__ . '/..' . '/twig/twig/src/Profiler/Node/EnterProfileNode.php',
        'Twig\\Profiler\\Node\\LeaveProfileNode' => __DIR__ . '/..' . '/twig/twig/src/Profiler/Node/LeaveProfileNode.php',
        'Twig\\Profiler\\Profile' => __DIR__ . '/..' . '/twig/twig/src/Profiler/Profile.php',
        'Twig\\RuntimeLoader\\ContainerRuntimeLoader' => __DIR__ . '/..' . '/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php',
        'Twig\\RuntimeLoader\\FactoryRuntimeLoader' => __DIR__ . '/..' . '/twig/twig/src/RuntimeLoader/FactoryRuntimeLoader.php',
        'Twig\\RuntimeLoader\\RuntimeLoaderInterface' => __DIR__ . '/..' . '/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php',
        'Twig\\Sandbox\\SecurityError' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityError.php',
        'Twig\\Sandbox\\SecurityNotAllowedFilterError' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityNotAllowedFilterError.php',
        'Twig\\Sandbox\\SecurityNotAllowedFunctionError' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityNotAllowedFunctionError.php',
        'Twig\\Sandbox\\SecurityNotAllowedMethodError' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityNotAllowedMethodError.php',
        'Twig\\Sandbox\\SecurityNotAllowedPropertyError' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php',
        'Twig\\Sandbox\\SecurityNotAllowedTagError' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityNotAllowedTagError.php',
        'Twig\\Sandbox\\SecurityPolicy' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityPolicy.php',
        'Twig\\Sandbox\\SecurityPolicyInterface' => __DIR__ . '/..' . '/twig/twig/src/Sandbox/SecurityPolicyInterface.php',
        'Twig\\Source' => __DIR__ . '/..' . '/twig/twig/src/Source.php',
        'Twig\\Template' => __DIR__ . '/..' . '/twig/twig/src/Template.php',
        'Twig\\TemplateWrapper' => __DIR__ . '/..' . '/twig/twig/src/TemplateWrapper.php',
        'Twig\\Test\\IntegrationTestCase' => __DIR__ . '/..' . '/twig/twig/src/Test/IntegrationTestCase.php',
        'Twig\\Test\\NodeTestCase' => __DIR__ . '/..' . '/twig/twig/src/Test/NodeTestCase.php',
        'Twig\\Token' => __DIR__ . '/..' . '/twig/twig/src/Token.php',
        'Twig\\TokenParser\\AbstractTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/AbstractTokenParser.php',
        'Twig\\TokenParser\\AutoEscapeTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/AutoEscapeTokenParser.php',
        'Twig\\TokenParser\\BlockTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/BlockTokenParser.php',
        'Twig\\TokenParser\\DoTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/DoTokenParser.php',
        'Twig\\TokenParser\\EmbedTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/EmbedTokenParser.php',
        'Twig\\TokenParser\\ExtendsTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/ExtendsTokenParser.php',
        'Twig\\TokenParser\\FilterTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/FilterTokenParser.php',
        'Twig\\TokenParser\\FlushTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/FlushTokenParser.php',
        'Twig\\TokenParser\\ForTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/ForTokenParser.php',
        'Twig\\TokenParser\\FromTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/FromTokenParser.php',
        'Twig\\TokenParser\\IfTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/IfTokenParser.php',
        'Twig\\TokenParser\\ImportTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/ImportTokenParser.php',
        'Twig\\TokenParser\\IncludeTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/IncludeTokenParser.php',
        'Twig\\TokenParser\\MacroTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/MacroTokenParser.php',
        'Twig\\TokenParser\\SandboxTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/SandboxTokenParser.php',
        'Twig\\TokenParser\\SetTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/SetTokenParser.php',
        'Twig\\TokenParser\\SpacelessTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/SpacelessTokenParser.php',
        'Twig\\TokenParser\\TokenParserInterface' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/TokenParserInterface.php',
        'Twig\\TokenParser\\UseTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/UseTokenParser.php',
        'Twig\\TokenParser\\WithTokenParser' => __DIR__ . '/..' . '/twig/twig/src/TokenParser/WithTokenParser.php',
        'Twig\\TokenStream' => __DIR__ . '/..' . '/twig/twig/src/TokenStream.php',
        'Twig\\TwigFilter' => __DIR__ . '/..' . '/twig/twig/src/TwigFilter.php',
        'Twig\\TwigFunction' => __DIR__ . '/..' . '/twig/twig/src/TwigFunction.php',
        'Twig\\TwigTest' => __DIR__ . '/..' . '/twig/twig/src/TwigTest.php',
        'Twig\\Util\\DeprecationCollector' => __DIR__ . '/..' . '/twig/twig/src/Util/DeprecationCollector.php',
        'Twig\\Util\\TemplateDirIterator' => __DIR__ . '/..' . '/twig/twig/src/Util/TemplateDirIterator.php',
        'Twig_BaseNodeVisitor' => __DIR__ . '/..' . '/twig/twig/lib/Twig/BaseNodeVisitor.php',
        'Twig_CacheInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/CacheInterface.php',
        'Twig_Cache_Filesystem' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Cache/Filesystem.php',
        'Twig_Cache_Null' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Cache/Null.php',
        'Twig_Compiler' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Compiler.php',
        'Twig_ContainerRuntimeLoader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ContainerRuntimeLoader.php',
        'Twig_Environment' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Environment.php',
        'Twig_Error' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error.php',
        'Twig_Error_Loader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error/Loader.php',
        'Twig_Error_Runtime' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error/Runtime.php',
        'Twig_Error_Syntax' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Error/Syntax.php',
        'Twig_ExistsLoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ExistsLoaderInterface.php',
        'Twig_ExpressionParser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ExpressionParser.php',
        'Twig_Extension' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension.php',
        'Twig_ExtensionInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ExtensionInterface.php',
        'Twig_ExtensionSet' => __DIR__ . '/..' . '/twig/twig/lib/Twig/ExtensionSet.php',
        'Twig_Extension_Core' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Core.php',
        'Twig_Extension_Debug' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Debug.php',
        'Twig_Extension_Escaper' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Escaper.php',
        'Twig_Extension_GlobalsInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/GlobalsInterface.php',
        'Twig_Extension_InitRuntimeInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/InitRuntimeInterface.php',
        'Twig_Extension_Optimizer' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Optimizer.php',
        'Twig_Extension_Profiler' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Profiler.php',
        'Twig_Extension_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Sandbox.php',
        'Twig_Extension_Staging' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/Staging.php',
        'Twig_Extension_StringLoader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Extension/StringLoader.php',
        'Twig_FactoryRuntimeLoader' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FactoryRuntimeLoader.php',
        'Twig_FileExtensionEscapingStrategy' => __DIR__ . '/..' . '/twig/twig/lib/Twig/FileExtensionEscapingStrategy.php',
        'Twig_Filter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Filter.php',
        'Twig_Function' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Function.php',
        'Twig_Lexer' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Lexer.php',
        'Twig_LoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/LoaderInterface.php',
        'Twig_Loader_Array' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Loader/Array.php',
        'Twig_Loader_Chain' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Loader/Chain.php',
        'Twig_Loader_Filesystem' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Loader/Filesystem.php',
        'Twig_Markup' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Markup.php',
        'Twig_Node' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node.php',
        'Twig_NodeCaptureInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeCaptureInterface.php',
        'Twig_NodeOutputInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeOutputInterface.php',
        'Twig_NodeTraverser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeTraverser.php',
        'Twig_NodeVisitorInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitorInterface.php',
        'Twig_NodeVisitor_Escaper' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/Escaper.php',
        'Twig_NodeVisitor_Optimizer' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/Optimizer.php',
        'Twig_NodeVisitor_SafeAnalysis' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/SafeAnalysis.php',
        'Twig_NodeVisitor_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/NodeVisitor/Sandbox.php',
        'Twig_Node_AutoEscape' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/AutoEscape.php',
        'Twig_Node_Block' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Block.php',
        'Twig_Node_BlockReference' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/BlockReference.php',
        'Twig_Node_Body' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Body.php',
        'Twig_Node_CheckSecurity' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/CheckSecurity.php',
        'Twig_Node_Do' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Do.php',
        'Twig_Node_Embed' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Embed.php',
        'Twig_Node_Expression' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression.php',
        'Twig_Node_Expression_Array' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Array.php',
        'Twig_Node_Expression_AssignName' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/AssignName.php',
        'Twig_Node_Expression_Binary' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary.php',
        'Twig_Node_Expression_Binary_Add' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Add.php',
        'Twig_Node_Expression_Binary_And' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/And.php',
        'Twig_Node_Expression_Binary_BitwiseAnd' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/BitwiseAnd.php',
        'Twig_Node_Expression_Binary_BitwiseOr' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/BitwiseOr.php',
        'Twig_Node_Expression_Binary_BitwiseXor' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/BitwiseXor.php',
        'Twig_Node_Expression_Binary_Concat' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Concat.php',
        'Twig_Node_Expression_Binary_Div' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Div.php',
        'Twig_Node_Expression_Binary_EndsWith' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/EndsWith.php',
        'Twig_Node_Expression_Binary_Equal' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Equal.php',
        'Twig_Node_Expression_Binary_FloorDiv' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/FloorDiv.php',
        'Twig_Node_Expression_Binary_Greater' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Greater.php',
        'Twig_Node_Expression_Binary_GreaterEqual' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/GreaterEqual.php',
        'Twig_Node_Expression_Binary_In' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/In.php',
        'Twig_Node_Expression_Binary_Less' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Less.php',
        'Twig_Node_Expression_Binary_LessEqual' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/LessEqual.php',
        'Twig_Node_Expression_Binary_Matches' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Matches.php',
        'Twig_Node_Expression_Binary_Mod' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Mod.php',
        'Twig_Node_Expression_Binary_Mul' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Mul.php',
        'Twig_Node_Expression_Binary_NotEqual' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/NotEqual.php',
        'Twig_Node_Expression_Binary_NotIn' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/NotIn.php',
        'Twig_Node_Expression_Binary_Or' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Or.php',
        'Twig_Node_Expression_Binary_Power' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Power.php',
        'Twig_Node_Expression_Binary_Range' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Range.php',
        'Twig_Node_Expression_Binary_StartsWith' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/StartsWith.php',
        'Twig_Node_Expression_Binary_Sub' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Binary/Sub.php',
        'Twig_Node_Expression_BlockReference' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/BlockReference.php',
        'Twig_Node_Expression_Call' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Call.php',
        'Twig_Node_Expression_Conditional' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Conditional.php',
        'Twig_Node_Expression_Constant' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Constant.php',
        'Twig_Node_Expression_Filter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Filter.php',
        'Twig_Node_Expression_Filter_Default' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Filter/Default.php',
        'Twig_Node_Expression_Function' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Function.php',
        'Twig_Node_Expression_GetAttr' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/GetAttr.php',
        'Twig_Node_Expression_MethodCall' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/MethodCall.php',
        'Twig_Node_Expression_Name' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Name.php',
        'Twig_Node_Expression_NullCoalesce' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/NullCoalesce.php',
        'Twig_Node_Expression_Parent' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Parent.php',
        'Twig_Node_Expression_TempName' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/TempName.php',
        'Twig_Node_Expression_Test' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test.php',
        'Twig_Node_Expression_Test_Constant' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Constant.php',
        'Twig_Node_Expression_Test_Defined' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Defined.php',
        'Twig_Node_Expression_Test_Divisibleby' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Divisibleby.php',
        'Twig_Node_Expression_Test_Even' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Even.php',
        'Twig_Node_Expression_Test_Null' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Null.php',
        'Twig_Node_Expression_Test_Odd' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Odd.php',
        'Twig_Node_Expression_Test_Sameas' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Test/Sameas.php',
        'Twig_Node_Expression_Unary' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary.php',
        'Twig_Node_Expression_Unary_Neg' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary/Neg.php',
        'Twig_Node_Expression_Unary_Not' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary/Not.php',
        'Twig_Node_Expression_Unary_Pos' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Expression/Unary/Pos.php',
        'Twig_Node_Flush' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Flush.php',
        'Twig_Node_For' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/For.php',
        'Twig_Node_ForLoop' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/ForLoop.php',
        'Twig_Node_If' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/If.php',
        'Twig_Node_Import' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Import.php',
        'Twig_Node_Include' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Include.php',
        'Twig_Node_Macro' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Macro.php',
        'Twig_Node_Module' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Module.php',
        'Twig_Node_Print' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Print.php',
        'Twig_Node_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Sandbox.php',
        'Twig_Node_SandboxedPrint' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/SandboxedPrint.php',
        'Twig_Node_Set' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Set.php',
        'Twig_Node_Spaceless' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Spaceless.php',
        'Twig_Node_Text' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/Text.php',
        'Twig_Node_With' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Node/With.php',
        'Twig_Parser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Parser.php',
        'Twig_Profiler_Dumper_Base' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Dumper/Base.php',
        'Twig_Profiler_Dumper_Blackfire' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Dumper/Blackfire.php',
        'Twig_Profiler_Dumper_Html' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Dumper/Html.php',
        'Twig_Profiler_Dumper_Text' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Dumper/Text.php',
        'Twig_Profiler_NodeVisitor_Profiler' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/NodeVisitor/Profiler.php',
        'Twig_Profiler_Node_EnterProfile' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Node/EnterProfile.php',
        'Twig_Profiler_Node_LeaveProfile' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Node/LeaveProfile.php',
        'Twig_Profiler_Profile' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Profiler/Profile.php',
        'Twig_RuntimeLoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/RuntimeLoaderInterface.php',
        'Twig_Sandbox_SecurityError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityError.php',
        'Twig_Sandbox_SecurityNotAllowedFilterError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFilterError.php',
        'Twig_Sandbox_SecurityNotAllowedFunctionError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedFunctionError.php',
        'Twig_Sandbox_SecurityNotAllowedMethodError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedMethodError.php',
        'Twig_Sandbox_SecurityNotAllowedPropertyError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedPropertyError.php',
        'Twig_Sandbox_SecurityNotAllowedTagError' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityNotAllowedTagError.php',
        'Twig_Sandbox_SecurityPolicy' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityPolicy.php',
        'Twig_Sandbox_SecurityPolicyInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Sandbox/SecurityPolicyInterface.php',
        'Twig_SimpleFilter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SimpleFilter.php',
        'Twig_SimpleFunction' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SimpleFunction.php',
        'Twig_SimpleTest' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SimpleTest.php',
        'Twig_Source' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Source.php',
        'Twig_SourceContextLoaderInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/SourceContextLoaderInterface.php',
        'Twig_Template' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Template.php',
        'Twig_TemplateWrapper' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TemplateWrapper.php',
        'Twig_Test' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test.php',
        'Twig_Test_IntegrationTestCase' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test/IntegrationTestCase.php',
        'Twig_Test_NodeTestCase' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Test/NodeTestCase.php',
        'Twig_Token' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Token.php',
        'Twig_TokenParser' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser.php',
        'Twig_TokenParserInterface' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParserInterface.php',
        'Twig_TokenParser_AutoEscape' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/AutoEscape.php',
        'Twig_TokenParser_Block' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Block.php',
        'Twig_TokenParser_Do' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Do.php',
        'Twig_TokenParser_Embed' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Embed.php',
        'Twig_TokenParser_Extends' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Extends.php',
        'Twig_TokenParser_Filter' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Filter.php',
        'Twig_TokenParser_Flush' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Flush.php',
        'Twig_TokenParser_For' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/For.php',
        'Twig_TokenParser_From' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/From.php',
        'Twig_TokenParser_If' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/If.php',
        'Twig_TokenParser_Import' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Import.php',
        'Twig_TokenParser_Include' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Include.php',
        'Twig_TokenParser_Macro' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Macro.php',
        'Twig_TokenParser_Sandbox' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Sandbox.php',
        'Twig_TokenParser_Set' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Set.php',
        'Twig_TokenParser_Spaceless' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Spaceless.php',
        'Twig_TokenParser_Use' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/Use.php',
        'Twig_TokenParser_With' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenParser/With.php',
        'Twig_TokenStream' => __DIR__ . '/..' . '/twig/twig/lib/Twig/TokenStream.php',
        'Twig_Util_DeprecationCollector' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Util/DeprecationCollector.php',
        'Twig_Util_TemplateDirIterator' => __DIR__ . '/..' . '/twig/twig/lib/Twig/Util/TemplateDirIterator.php',
        'lernkartei\\classes\\Box' => __DIR__ . '/../..' . '/app/lernkartei/classes/Box.php',
        'lernkartei\\classes\\Card' => __DIR__ . '/../..' . '/app/lernkartei/classes/Card.php',
        'lernkartei\\classes\\Game' => __DIR__ . '/../..' . '/app/lernkartei/classes/Game.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4edb17f88f9164e5dd4faaf41018964d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4edb17f88f9164e5dd4faaf41018964d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4edb17f88f9164e5dd4faaf41018964d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4edb17f88f9164e5dd4faaf41018964d::$classMap;

        }, null, ClassLoader::class);
    }
}
