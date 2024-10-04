<h2>Type System</h2>
<p>PHP's type system supports various atomic types that can be composed together to create more complex types.
    Some of these types can be written as type declarations.</p>

<h3>Atomic types</h3>

<p>Some atomic types are built-in types which are tightly integrated with the language and cannot be reproduced with user defined types.</p>

<p>The list of base types is:</p>
<ul>
    <li>Built-in types
        <ul>
            <li>null type</li>
            <li>Scalar types:
                <ul>
                    <li>bool type</li>
                    <li>int type</li>
                    <li>float type</li>
                    <li>string type</li>
                </ul>
            </li>
            <li>void type</li>
            <li>Relative class types: self, parent, and static</li>
        </ul>
    </li>
    <li>Value types
        <ul>
            <li>false</li>
            <li>true</li>
        </ul>
    </li>
    <li>User-defined types (generally referred to as class-types)
        <ul>
            <li>Interfaces</li>
            <li>Classes</li> 
            <li>Enumerations</li>
        </ul>
    </li>
    <li>callable type</li>
</ul>

<h3>Composite types</h3>
<p>It is possible to combine multiple atomic types into composite types. 
    PHP allows types to be combined in the following ways:</p>
<ul>
    <li>Intersection of class-types (interfaces and class names).</li>
    <li>Union of types.</li>
</ul>

<h4>Intersection types</h4>
<p>An intersection type accepts values which satisfies multiple class-type declarations, rather than a single one. 
    Individual types which form the intersection type are joined by the & symbol. 
    Therefore, an intersection type comprised of the types T, U, and V will be written as T&U&V.</p>

<h4>Union types</h4>
<p>A union type accepts values of multiple different types, rather than a single one. 
    Individual types which form the union type are joined by the | symbol. 
    Therefore, a union type comprised of the types T, U, and V will be written as T|U|V. 
    If one of the types is an intersection type, it needs to be bracketed with parenthesis for it to written in DNF: T|(X&Y).</p>