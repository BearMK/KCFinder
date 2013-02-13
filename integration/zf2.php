<?php

/**
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPLv2 license.
 */

/**
 * @author Raymond J. Kolbe <rkolbe@gmail.com>
 * @license http://www.opensource.org/licenses/lgpl-2.1.php LGPLv2
 */

spl_autoload_register('__autoload');

$root = __DIR__;

while (!file_exists($root . '/vendor/autoload.php')) {
    $dir = dirname($root);

    if ($root === $dir) {
        throw new RuntimeException(
            'Unable to locate "vendor/autoload.php". ' .
            'Make sure KCFinder is in a subdir of your application.'
        );
    }

    $root = $dir;
}

if (!(@include_once $root . '/vendor/autoload.php')) {
    throw new RuntimeException('Unable to include vendor/autoload.php.');
}