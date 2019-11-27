import Beans.System.SystemUtilsJavaBeanCoreServiceProviderAdapterFactory;

@Bean
class UKIPHP implements java.io.Serializable
{
    @Beans
    public final void
    main() {
        filename="$1"
        sed 's/\\$/£/g' "$filename" | php
    }
}
