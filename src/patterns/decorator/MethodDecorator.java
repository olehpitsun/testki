package patterns.decorator;

/**
 * Created by Oleh on 10.11.2017.
 */
public class MethodDecorator implements IMethod {

    IMethod method;

    public MethodDecorator(IMethod method) {
        this.method = method;
    }

    @Override
    public String applyMethod() {
        return method.applyMethod();
    }
}
