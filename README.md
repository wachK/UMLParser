UMLParser
=========

Generates Doctrine 2 entities from VioletUML class diagram file

Usage
=====

```
$ python umlparser -i diagram.class.violet -d myproject/entities -ns Me\\Project\\Entity
```

`-i, --input` VioletUML file

`-d, --dest` Destination directory

`-ns, --namespace` Namespace for entities

`[-it, --inheritancetype]` Inheritance type (`SINGLE_TABLE` or `JOINED`) (optional)


Supported diagram syntax
==============

* ##Class inheritance

    Class name should be `MyClass : ParentClass`

* ##Attributes

    Syntax: `access name : type`

    where:

    * `access` is one of: `+`, `-` or `#`; specifies access to member (public, private or protected)
    * `name` is the attribute name
    * `type` is the attribute type (i.e. `string` or `integer`). **Must be valid Doctrine 2 type**

    **Examples**:

    `- name : string`

    `- price : float`

* ##Associations

    Attribute syntax: `access name : [mapping]target-entity(>mapped-by|<inversed-by)`

    where:

    * `mapping` represents one of mapping types: `11` (one to one), `1*` (one to many), `*1` (many to one), `**` (many to many)
    * `target-entity` is the target entity name (class)
    * `mapped-by`, `inversed-by` are optional mapping parameters: `mapped-by` preceded by `>` character, specifies the `mappedBy` Doctrine parameter, `inversed-by` preceded by `<` character, specifies the `inversedBy` Doctrine parameter - [see documentation](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html)

    **Examples**:

    Entity `Product`:

    `- features : [1*]Feature>product` one to many association with `Feature`, mapped by `product` field

    Entity `Feature`:

    `- product : [*1]Product<features` many to one association with `Product`, inversed by `features` field


    **Notice**: some mapping types require `mappedBy` or `inversedBy` in order to work - [see documentation](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html)

* ## Nullable attributes

    Mark attribute as nullable/required by prepending `?` or `!` character to its type name.

    **Examples**:

    `- description : ?string` name field can be set to `NULL` (is optional)
    

    Entity `Product`:

    `- features : [1*]Feature>product`

    Entity `Feature`:

    `- product : ![*1]Product<features` every feature must be associated with product


    **Notice**: by default Doctrine marks every attribute as required (not nullable), and every association as optional (nullable)
