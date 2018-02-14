<?php

/*
 * Copyright 2016 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\Serializer;

use JMS\Serializer\Accessor\AccessorStrategyInterface;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\Naming\AdvancedNamingStrategyInterface;
use JMS\Serializer\Naming\PropertyNamingStrategyInterface;
use JMS\Serializer\Util\Writer;
use Symfony\Component\Yaml\Inline;
use Symfony\Component\Yaml\Yaml;

/**
 * Serialization Visitor for the YAML format.
 *
 * @see http://www.yaml.org/spec/
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class YamlSerializationVisitor extends JsonSerializationVisitor
{
    public function getResult($data)
    {
        return trim(Yaml::dump($data, 1000, 4, Yaml::DUMP_OBJECT_AS_MAP|Yaml::DUMP_EMPTY_ARRAY_AS_SEQUENCE))."\n";
    }
}
