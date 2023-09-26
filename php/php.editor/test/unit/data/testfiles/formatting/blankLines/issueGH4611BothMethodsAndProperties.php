<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
class GH4611Class
{

private int $field;

public function method1() {
}

/**
 * Test.
 */
public function method2() {
}

}

trait GH4611Trait
{
private const CONSTANT=1;

/**
 * Test.
 */
public function method1() {
}

public function method2() {
}

}

enum GH4611Enum
{
/**
 * Test.
 */
public const CONSTANT = 1;
/**
 * Test.
 */
case Case1 = 1;
public function method1() {
}

public function method2() {
}

}

interface GH4611Interface
{
/**
 * Test.
 */
public function method();
}
